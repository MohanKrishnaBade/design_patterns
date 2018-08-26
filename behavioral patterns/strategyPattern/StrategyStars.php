<?php

require_once "StrategyInterface.php";
require_once "Book.php";
require_once "Endorsement.php";

class StrategyStars implements StrategyInterface
{
    private $endorsement;

    public function __construct(Endorsement $endorsement)
    {
        $this->endorsement = $endorsement;
    }

    public function showTitle()
    {
        return $this->endorsement->getLastName();
    }
}