<?php

require_once "quackBehavior.php";
require_once "flyBehavior.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

abstract class Duck implements quackBehavior, flyBehavior
{

    protected $_quackBehavior;
    protected $_flyBehavior;

    abstract function display();

    public function __construct(quackBehavior $quackBehavior, flyBehavior $flyBehavior)
    {
        $this->_quackBehavior = $quackBehavior;
        $this->_flyBehavior = $flyBehavior;
    }

    public function swim()
    {
        echo "swimming..\n";
    }

    public function quack()
    {
        $this->_quackBehavior->quack();
    }

    public function performQuack()
    {
        $this->quack();
    }

    public function fly()
    {
        $this->_flyBehavior->fly();
    }

    public function performFly()
    {
        $this->fly();
    }

    public function setFlyBehavior(flyBehavior $fb)
    {
        $this->_flyBehavior = new $fb;
    }

    public function setQuackBehavior(quackBehavior $qb)
    {
        $this->_quackBehavior = new $qb;
    }
}