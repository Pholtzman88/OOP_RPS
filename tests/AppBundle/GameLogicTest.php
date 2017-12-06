<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 1:04 AM
 */

namespace Tests\AppBundle;


use AppBundle\Entity\AppUser;
use AppBundle\Entity\Computer;
use AppBundle\Entity\Randomizer;
use AppBundle\Entity\RockPaperScissors;
use AppBundle\Entity\Rules;
use AppBundle\Entity\Selection;
use AppBundle\Entity\Validator;

class GameLogicTest extends AppTestCase
{
    /** @var  RockPaperScissors */
    private $rockPaperScissors;

    public function setUp()
    {
        parent::setUp();
        $this->rockPaperScissors = new RockPaperScissors(
            new Computer(new Selection(), new Randomizer()),
            new AppUser(new Selection(), new Validator()),
            new Rules()
        );
    }

    public function testPlayGame()
    {
        $userPick = $this->rockPaperScissors->userPick("rock");
        $computerPick = $this->rockPaperScissors->computerPick();
        $userResults = $this->rockPaperScissors->play($userPick, $computerPick);

        switch($userResults){
            case "win":
                echo "congratulations you win!";
                break;
            case "lose":
                echo "awww too bad, you have lost this round..";
                break;
            case "tie":
                echo "looks like its a draw, try again!";
                break;
        }
    }
}
