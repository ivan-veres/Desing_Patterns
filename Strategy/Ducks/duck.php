<?php

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

abstract class Duck
{
    public function quack()
    {
        echo "Quack!\n";
    }

    public function swim()
    {
        echo "swiming..\n";
    }

    public function fly()
    {
        echo "fly like a eagle!";
    }

    abstract function display();
}