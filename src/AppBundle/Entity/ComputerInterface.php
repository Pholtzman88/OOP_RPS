<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 2:37 AM
 */

namespace AppBundle\Entity;

interface ComputerInterface
{
    public function selectOneAtRandom();

    public function selectAll();
}