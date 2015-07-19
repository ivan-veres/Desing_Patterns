<?php

require_once "duck.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class RubberDuck extends Duck
{
    public function display()
    {
        echo "Looking like Rubber duck!\n";
    }

    public function quack()
    {
        echo "Squeeeek!\n";
    }

    public function fly()
    {
        echo "Rubber ducks can't fly.. :(\n";
    }
}