<?php
include_once "AddonDecoratorBeverage.php";
include_once "Bevarages.php";

class soy extends AddonDecoratorBeverage
{
    public $soy;

    public function __construct(Bevarages $s)
    {
        $this->soy = $s;
    }

    public function cost()
    {
        return $this->soy->cost() + 3;
    }

}