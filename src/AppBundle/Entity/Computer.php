<?php
/**
 * Created by PhpStorm.
 * User: holtz
 * Date: 12/5/2017
 * Time: 8:22 PM
 */

namespace AppBundle\Entity;


class Computer implements ComputerInterface
{
    private $selection;

    private $randomizer;

    /**
     * Computer constructor.
     * @param SelectionInterface $selection
     * @param RandomizerInterface $randomizer
     */
    public function __construct(SelectionInterface $selection, RandomizerInterface $randomizer)
    {
        $this->selection = $selection;
        $this->randomizer = $randomizer;
    }

    public function selectOneAtRandom()
    {
        return $this->randomizer->makeRandomSelectionFrom($this->selection->getChoices());
    }

    public function selectAll()
    {
        return $this->selection->getChoices();
    }

}
