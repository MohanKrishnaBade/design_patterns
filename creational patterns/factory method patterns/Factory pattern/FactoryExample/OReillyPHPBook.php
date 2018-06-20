<?php

namespace FactoryExample;

include_once "AbstractPHPBook.php";

class OReillyPHPBook extends AbstractPHPBook {

    private $author;

    private $title;

    private static $oddOrEven = 'odd';
    function __construct() {
        //alternate between 2 books
        if ('odd' == self::$oddOrEven) {
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title  = 'Programming'.$this->subject;
            self::$oddOrEven = 'even';
        } else {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title  =  $this->subject.'Cookbook';
            self::$oddOrEven = 'odd';
        }
    }
    function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}