<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 5/27/18
 * Time: 2:35 PM
 */

include_once "AddonDecoratorBeverage.php";
include_once "Bevarages.php";

class Caromal extends AddonDecoratorBeverage
{

    public $bevarage;

    public function __construct(Bevarages $bevarages)
    {
        $this->bevarage = $bevarages;

    }

    public function cost()
    {
        return $this->bevarage->cost() + 12;

    }
}