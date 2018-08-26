<?php

include_once "PetcoAnimalCompany.php";
include_once "ZoetisAnimalCompany.php";

function getData(AnimalFactoryInterface $animalFactory)
{
    $petco = $animalFactory->createAnimal('petco');
    echo $petco->getType() . "<br>";
    echo $petco->getLifeTime() . "<br>" . "<br>";

}

getData(new \FactoryOwnExample\PetcoAnimalCompany());

getData(new \FactoryOwnExample\ZoetisAnimalCompany());