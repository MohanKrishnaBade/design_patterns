<?php

include_once "Expresso.php";
include_once "Caromal.php";
include_once "soy.php";

$coffee = new Expresso();
$coffeAddOn = new Caromal($coffee);
echo $coffee->cost() . "<br>";

echo $coffeAddOn->cost()."<br>";


$coffeadd = new soy($coffee);
echo $coffeadd->cost()."<br>";
