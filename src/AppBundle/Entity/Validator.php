<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 11:59 PM
 */

namespace AppBundle\Entity;

class Validator implements ValidatorInterface
{

    public function validateChoice($userChoice, $options)
    {
        for ($i = 0; $i < sizeof($options); $i++){
            if ($userChoice === $options[$i]){
                return $userChoice;
            }
        }
        return null;
    }
}