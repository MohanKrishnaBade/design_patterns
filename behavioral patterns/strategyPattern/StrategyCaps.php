<?php

require_once "StrategyInterface.php";
require_once "Policy.php";
require_once "Book.php";

class StrategyCaps implements StrategyInterface
{
    /**
     * @var Policy
     */
    private $policy;

    public function __construct(Policy $policy)
    {
        $this->policy = $policy;

    }

    public function showTitle()
    {
        return $this->policy->getName();
    }
}