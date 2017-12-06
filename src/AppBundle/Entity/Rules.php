<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 1:53 AM
 */

namespace AppBundle\Entity;


class Rules implements RulesInterface
{

    public function checkScore($userChoice, $computerChoice)
    {
        $resultsBoard = [
            "rock" => [
                "rock" => "tie",
                "scissors" => "win",
                "paper" => "lose"
            ],
            "paper" => [
                "rock" => "win",
                "scissors" => "lose",
                "paper" => "tie"
            ],
            "scissors" => [
                "rock" => "lose",
                "paper" => "win",
                "scissors" => "tie"
            ]
        ];
            return $resultsBoard[$userChoice][$computerChoice];

    }
}