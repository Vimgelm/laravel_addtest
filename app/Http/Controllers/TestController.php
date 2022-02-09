<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Question;

class TestController extends Controller
{
    public function actionIndex(){
        return view('createtest');
    }

    public function Result(Request $request){
        $test = New Test();
        $questions = New Question();
        $test->name = $request->name;
        $test->description = $request->description;
        $test->owner = $request->owner;
        $test->save();
        $id = $test->id;


        foreach ($request->all() as $item) {
            if(isset($item['id'])){
                $questions->test_id = $id;
                $questions->question = $item['question'];
                $questions->answer1 = $item['answer1'];
                $questions->answer2 = $item['answer2'];
                $questions->answer3 = $item['answer3'];
                $questions->answer4 = $item['answer4'];
                $questions->save();
            }


        }
    }
}
