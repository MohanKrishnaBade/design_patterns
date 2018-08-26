<?php

require_once "StrategyInterface.php";
require_once "Book.php";

class StrategyExclaim implements StrategyInterface
{
    public function showTitle(Book $book_in) {
        $title = $book_in->getTitle();
        return  $title."StrategyExclaim";
    }

}