<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 2:35 AM
 */

namespace AppBundle\Entity;

interface ValidatorInterface
{
    public function validateChoice($userChoice, $options);
}