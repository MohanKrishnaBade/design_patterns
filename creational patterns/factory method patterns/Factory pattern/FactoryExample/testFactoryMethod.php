<?php


namespace FactoryExample;

include_once('OReillyFactoryMethod.php');
include_once "SamsFactoryMethod.php";

$factoryMethodInstance = new SamsFactoryMethod();

function testFactoryMethod(AbstractFactoryMethod $factoryMethodInstance)
{

    $phpUs = $factoryMethodInstance->makePHPBook("us");
    echo 'us php Author: ' .
        $phpUs->getAuthor() . "<br />"."<br />";
    echo 'us php Title: ' .
        $phpUs->getTitle() . "<br />"."<br />";


    $phpUs = $factoryMethodInstance->makePHPBook("other");
    echo 'other php Author: ' .
        $phpUs->getAuthor() . "<br />"."<br />";
    echo 'other php Title: ' .
        $phpUs->getTitle() . "<br />"."<br />"."<br />"."<br />";


}

testFactoryMethod($factoryMethodInstance);
testFactoryMethod(new OReillyFactoryMethod());
