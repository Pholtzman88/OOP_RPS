<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 9:18 PM
 */

namespace AppBundle\Entity;


class Randomizer implements RandomizerInterface
{

    public function makeRandomSelectionFrom(array $options)
    {
        $randomNumber = $this->generateRandomNumberBetween(0,sizeOf($options) - 1);

        $choice =  array_slice($options, $randomNumber, 1);

        if ( array() === $options){
            return $choice[0];
        }

        foreach( $choice as $key => $value){
            return $value;
        }

        return null;
    }

    public function generateRandomNumberBetween($min, $max)
    {
        return floor(rand($min, $max));
    }
}