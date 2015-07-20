<?php

require_once "duck.php";
require_once "muteQuack.php";
require_once "flyNoWay.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class DecoyDuck extends Duck
{

    public function __construct()
    {
        parent::__construct(new MuteQuack(), new FlyNoWay());
    }

    public function display()
    {
        echo "Looking like Decoy duck!\n";
    }
}