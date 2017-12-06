<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 9:02 PM
 */

namespace AppBundle\Entity;


class Selection implements SelectionInterface
{

    public function getChoices()
    {
        $choices = ["rock", "paper", "scissors"];
        return $choices;
    }
}