<?php

require_once "duck.php";
require_once "quacking.php";
require_once "flyNoWay.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class ModelDuck extends Duck
{
    
    protected $_flyBehavior;
    protected $_quackBehavior;

    public function __construct()
    {
        $this->_flyBehavior = new flyNoWay();
        $this->_quackBehavior = new Quacking();
    }
    
    public function display()
    {
        echo "Looks like model duck.\n";
    }
}