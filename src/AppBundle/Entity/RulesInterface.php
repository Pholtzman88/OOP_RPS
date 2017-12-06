<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 2:39 AM
 */

namespace AppBundle\Entity;

interface RulesInterface
{
    public function checkScore($userChoice, $computerChoice);
}