<?php


require_once "flyBehavior.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class FlyNoWay implements flyBehavior
{
    public function fly()
    {
        echo "Drops down..\n";
    }
}