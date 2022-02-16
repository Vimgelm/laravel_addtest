<?php


namespace App\Http\Requests;

class CompareResponses
{
    private $testResults = array();

    public function compareUserAnswers(array $correctAnswers, array $userAnswers)
    {

        foreach ($userAnswers as $key => $answers){
            if ($answers['answer1'] == $correctAnswers[$key]['answer1']
            AND $answers['answer2'] == $correctAnswers[$key]['answer2']
            AND $answers['answer3'] == $correctAnswers[$key]['answer3']
            AND $answers['answer4'] == $correctAnswers[$key]['answer4']){
                $this->testResults[key] = true;
            }
        }
        return $this->testResults;
    }

    private function percentageResponses(array $testResult, int $numberOfAnswer){
        return ($numberOfAnswer/(count($testResult)))*100;
    }
}
