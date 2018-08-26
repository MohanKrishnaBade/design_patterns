<?php

require_once "StrategyCaps.php";
require_once "StrategyStars.php";

require_once "Book.php";

class StrategyContext
{
    private $strategy = NULL;

    public function __construct($strategy_ind_id)
    {
        if ($strategy_ind_id instanceof Policy) {
            $this->strategy = new StrategyCaps($strategy_ind_id);
        } elseif ($strategy_ind_id instanceof Endorsement) {
            $this->strategy = new StrategyStars($strategy_ind_id);
        }
    }

    public function showBookTitle()
    {
        return $this->strategy->showTitle();

    }
}