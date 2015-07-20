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

    protected $_quackBehavior;
    protected $_flyBehavior;

    public function __construct()
    {
        $this->_quackBehavior = new MuteQuack();
        $this->_flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "Looking like Decoy duck!\n";
    }
}