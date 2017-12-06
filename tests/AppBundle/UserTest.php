<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 11:37 PM
 */

namespace Tests\AppBundle;


use AppBundle\Entity\AppUser;
use AppBundle\Entity\AppUserInterface;
use AppBundle\Entity\Selection;
use AppBundle\Entity\Validator;

class UserTest Extends AppTestCase
{
    /** @var  AppUserInterface */
    private $user;

    public function setUp()
    {
        parent::setUp();
        $this->user = new AppUser( new Selection(), new Validator());
    }

    public function testUserChoice()
    {
        $userChoice = $this->user->makeSelection("rock");
        self::assertSame("rock", $userChoice);
    }
}
