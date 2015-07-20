<?php


require_once "flyBehavior.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class FlyRocketPowered implements flyBehavior
{
    public function fly()
    {
        echo "Rocket power baby!!!\n";
    }
}