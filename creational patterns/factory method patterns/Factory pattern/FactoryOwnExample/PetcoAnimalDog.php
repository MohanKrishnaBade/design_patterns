<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 5/26/18
 * Time: 4:23 PM
 */

namespace FactoryOwnExample;
include_once "AnimalFactory.php";


class PetcoAnimalDog extends AnimalFactory
{
    private $type;
    private $lifeTime;

    public function __construct()
    {
        $this->type = $this->animalName . "BullDog";
        $this->lifeTime = "20years";
    }

    public function getType()
    {
        return $this->type;
    }

    public function getLifeTime()
    {
        return $this->lifeTime;
    }
}