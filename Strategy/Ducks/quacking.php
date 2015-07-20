<?php

require_once "quackBehavior.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class Quacking implements quackBehavior
{
    public function quack()
    {
        echo "Quack!\n";
    }
}