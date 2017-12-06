<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 8:20 PM
 */

namespace Tests\AppBundle;


use AppBundle\Entity\Computer;
use AppBundle\Entity\ComputerInterface;
use AppBundle\Entity\Randomizer;
use AppBundle\Entity\Selection;


class ComputerTest extends AppTestCase
{
    /** @var  ComputerInterface */
    private $computer;

    public function setUp()
    {
        parent::setUp();
        $this->computer = new Computer( new Selection(), new Randomizer());
    }

    public function testComputerSelectsOneAtRandom()
    {
        $choices = $this->computer->selectOneAtRandom();
        self::assertNotNull($choices,"should return a random value from an array");
    }

    public function testComputerSelectsAll()
    {
        $all = $this->computer->selectAll();
        self::assertSame(3, sizeOf($all));
    }

}
