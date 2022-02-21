<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Question;
use App\Models\Response;
use App\Http\Requests\CompareResponses;
class TestController extends Controller
{
    /**
     * view create test page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function actionIndex()
    {
        return view('createtest');
    }

    /**
     * view page for passing the test
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function passTest(Request $request, int $id)
    {
        $test_title = Test::where('id', $id)->select('description', 'name')->get();
        $question_collect = Test::find($id)->questions()->select('question', 'answer1', 'answer2', 'answer3', 'answer4')->get();

        return view('passtest', ['data_questions' => $question_collect, 'data_title' => $test_title, 'id'=>$id]);
    }

    /**
     * this route validate and save data for create page
     * @param Request $request
     */
    public function storeTest(Request $request)
    {
//        TODO подправить валидацию так как изменились входные данные, перенести валидаци в оддельный файл
//validation request data:
        $test = new Test();//model for tests
        $questions = new Question(); //model for tests questions
//validation request data:
        $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:500']
        ]);
        foreach ($request->questions as $key=> $question){
            $request->validate([
                "$question[question]" => ['requred','max:500'],
                "$question[answer1]" => ['requred','max:255'],
                "$question[answer2]" => ['requred','max:255'],
                "$question[answer3]" => ['requred','max:255'],
                "$question[answer4]" => ['requred','max:255'],
            ]);
        }
//        var_dump($request->session()->get('$errors'));

//save to bd test
        $test->name = $request->input('name');
        $test->description = $request->input('description');
        $test->owner = $request->input('owner');
        $test->save();
        $test_id = $test->id;
//save to bd question for test
        foreach ($request->questions as $key => $item) {
                $questions->test_id = $test_id;
                $questions->question = $item['question'];
                $questions->answer1 = $item['answer1'];
                $questions->answer2 = $item['answer2'];
                $questions->answer3 = $item['answer3'];
                $questions->answer4 = $item['answer4'];
                $questions->check1 = $request->boolean("$questions[$key][check_1]", false);
                $questions->check2 = $request->boolean("$questions[$key][check_2]", false);
                $questions->check3 = $request->boolean("$questions[$key][check_3]", false);
                $questions->check4 = $request->boolean("$questions[$key][check_4]", false);
                $questions->save();
        }
    }

    /**
     * validate, compare and save user answers
     * @param Request $request
     */
    public function saveAnswers(Request $request){
        //todo валидация ответов в отдельный файл
        $test_id = $request->input('id');

        $correctAnswer = Question::where('test_id', $test_id)->select('check1','check2','check3','check4')->get();
        $correctAnswer =$correctAnswer->toArray();

        $userAnswers = $request->all();
        unset($userAnswers['id']);
        //сравниваем ответы юзера
        $testResult = new CompareResponses();
        $testResult->compareUserAnswers($correctAnswer, $userAnswers);
    }

    public function getTest()
    { // todo убрать, отладочная информация
        return view('test');
    }
}
