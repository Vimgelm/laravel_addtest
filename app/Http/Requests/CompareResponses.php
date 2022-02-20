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
        $result = 0;
        foreach ($correctAnswers as $key => $answers) {
            if ($answers['check1'] == $userAnswers[$key]['check1'] and
                $answers['check2'] == $userAnswers[$key]['check2'] and
                $answers['check3'] == $userAnswers[$key]['check3'] and
                $answers['check4'] == $userAnswers[$key]['check4']) {
                $result += 1;
            }
        }
        $testResult['numberOfCorrect'] = $result;
        $numberOfAnswer = count($correctAnswers);
        $testResult['percent'] = $this->percentageResponses($result, $numberOfAnswer);
        return $testResult;
    }

    /**
     *  percentage user right answers
     * @param array $testResult
     * @param int $numberOfAnswer
     * @return float|int
     */
    private function percentageResponses(int $result, int $numberOfAnswer)
    {
        return $sd = ($result/$numberOfAnswer) * 100;
    }
}
