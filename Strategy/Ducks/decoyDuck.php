<?php

require_once "duck.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class DecoyDuck extends Duck
{
    public function display()
    {
        echo "Looking like Decoy duck!\n";
    }

    public function fly()
    {
        echo "Decoy ducks can't fly.. :(\n";
    }

    public function quack()
    {
        echo "Decoy ducks can't quack!\n";
    }
}