<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 5/26/18
 * Time: 4:19 PM
 */

namespace FactoryOwnExample;

include_once "ZoetisAnimalDog.php";
include_once "AnimalFactoryInterface.php";
include_once "PetcoAnimalDog.php";

class ZoetisAnimalCompany implements \AnimalFactoryInterface
{
    public function createAnimal($animal)
    {
        switch ($animal) {
            case "petco":
                return new ZoetisAnimalDog();
                break;
            case 'other':
                return new PetcoAnimalDog();
                break;
            default:
                return new ZoetisAnimalDog();
                break;
        }
    }

}