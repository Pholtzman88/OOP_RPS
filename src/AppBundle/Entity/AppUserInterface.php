<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/6/2017
 * Time: 2:38 AM
 */

namespace AppBundle\Entity;

interface AppUserInterface
{
    /**
     * @param $choice
     * @return mixed
     */
    public function makeSelection($choice);
}