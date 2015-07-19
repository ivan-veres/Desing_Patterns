<?php

require_once "duck.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class ReadheadDuck extends Duck
{
    public function display()
    {
        echo "Looking like Redhead duck!\n";
    }
}