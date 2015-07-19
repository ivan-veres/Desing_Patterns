<?php

require_once "mallardDuck.php";
require_once "readheadDuck.php";
require_once "rubberDuck.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

$mallard = new MallardDuck();

$mallard->display();
$mallard->quack();
$mallard->swim();

$readhead = new ReadheadDuck();

$readhead->display();
$readhead->quack();
$readhead->swim();

$rubber = new RubberDuck();

$rubber->display();
$rubber->quack();
$rubber->swim();