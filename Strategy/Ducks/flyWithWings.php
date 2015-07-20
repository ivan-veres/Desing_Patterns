<?php


require_once "flyBehavior.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class FlyWithWings implements flyBehavior
{
    public function fly()
    {
        echo "Fly like an eagle!\n";
    }
}