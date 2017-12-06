<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 1:17 AM
 */

namespace AppBundle\Entity;


class RockPaperScissors
{
    /**
     * @var ComputerInterface
     */
    private $computer;
    /**
     * @var AppUserInterface
     */
    private $user;
    /**
     * @var RulesInterface
     */
    private $rules;

    /**
     * RockPaperScissors constructor.
     * @param ComputerInterface $computer
     * @param AppUserInterface $user
     */
    public function __construct(ComputerInterface $computer, AppUserInterface $user, RulesInterface $rules)
    {
        $this->computer = $computer;
        $this->user = $user;
        $this->rules = $rules;
    }

    public function userPick($userChoice)
    {
        return $this->user->makeSelection($userChoice);
    }

    public function computerPick()
    {
        return $this->computer->selectOneAtRandom();
    }

    public function play($userPick, $computerPick)
    {

        echo "You picked " . $userPick . " and the computer picked " . $computerPick . "...\n";
        return $this->rules->checkScore($userPick, $computerPick);
    }

}