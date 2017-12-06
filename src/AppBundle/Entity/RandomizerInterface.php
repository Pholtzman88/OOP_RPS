<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 11:11 PM
 */

namespace AppBundle\Entity;

interface RandomizerInterface
{
    public function makeRandomSelectionFrom(array $options);

    public function generateRandomNumberBetween($min, $max);
}