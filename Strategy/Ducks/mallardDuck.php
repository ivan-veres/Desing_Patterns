<?php

require_once "duck.php";
require_once "quacking.php";
require_once "flyWithWings.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class MallardDuck extends Duck
{

    public function __construct()
    {
        parent::__construct(new Quacking(), new FlyWithWings());
    }

    public function display()
    {
        echo "Looking like Mallard duck!\n";
    }
}