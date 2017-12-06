<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 11:44 PM
 */

namespace AppBundle\Entity;


class AppUser implements AppUserInterface
{
    private $validator;

    private $selection;

    /**
     * AppUser constructor.
     * @param SelectionInterface $selection
     * @param ValidatorInterface $validator
     */
    public function __construct(SelectionInterface $selection, ValidatorInterface $validator)
    {
        $this->selection = $selection;
        $this->validator = $validator;
    }

    /**
     * @param $choice
     * @return mixed
     */
    public function makeSelection($choice)
    {
        return $this->validator->validateChoice($choice, $this->selection->getChoices());
    }

}