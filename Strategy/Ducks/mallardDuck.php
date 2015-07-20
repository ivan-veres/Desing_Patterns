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

    protected $_quackBehavior;
    protected $_flyBehavior;

    public function __construct()
    {
        $this->_quackBehavior = new Quacking();
        $this->_flyBehavior = new flyWithWings();
    }

    public function display()
    {
        echo "Looking like Mallard duck!\n";
    }
}