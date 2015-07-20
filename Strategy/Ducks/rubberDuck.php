<?php

require_once "duck.php";
require_once "flyNoWay.php";
require_once "squeak.php";


/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class RubberDuck extends Duck
{

    public function __construct()
    {
        parent::__construct(new Squeak(), new FlyNoWay());
    }

    public function display()
    {
        echo "Looking like Rubber duck!\n";
    }
}