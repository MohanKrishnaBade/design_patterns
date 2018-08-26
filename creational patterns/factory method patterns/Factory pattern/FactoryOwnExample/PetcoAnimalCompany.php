<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 5/26/18
 * Time: 4:17 PM
 */

namespace FactoryOwnExample;
include_once "AnimalFactoryInterface.php";
include_once "PetcoAnimalDog.php";
include_once "ZoetisAnimalDog.php";

class PetcoAnimalCompany implements \AnimalFactoryInterface
{
    public function createAnimal($animal)
    {
        switch ($animal) {
            case "petco":
                return new PetcoAnimalDog();
                break;
            case 'other':
                return new ZoetisAnimalDog();
                break;
            default:
                return new PetcoAnimalDog();
                break;
        }
    }

}