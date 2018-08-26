<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 7/14/18
 * Time: 4:38 PM
 */
require_once "Book.php";
require_once "StrategyContext.php";
require_once "Endorsement.php";
require_once "Policy.php";

writeln('BEGIN TESTING STRATEGY PATTERN');
writeln('');

$book = new Book('PHP for Cats','Larry Truett');

$strategyContextC = new StrategyContext(new Policy());
$strategyContextS = new StrategyContext(new Endorsement());

writeln('test 1 - show name context C');
writeln($strategyContextC->showBookTitle());
writeln('');

writeln('test 3 - show name context S');
writeln($strategyContextS->showBookTitle());
writeln('');

writeln('END TESTING STRATEGY PATTERN');

/**
 * @param $line_in
 */
function writeln($line_in) {
    echo $line_in."<br/>";
}