<?php


namespace App\Http\Requests;

class CompareResponses
{
    private $testResults = array();

    /**
     * compare user answers and right answers
     * @param array $correctAnswers
     * @param array $userAnswers
     * @return array
     */
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

    /**
     *  percentage user right answers
     * @param array $testResult
     * @param int $numberOfAnswer
     * @return float|int
     */
    private function percentageResponses(array $testResult, int $numberOfAnswer){
        return ($numberOfAnswer/(count($testResult)))*100;
    }
}
