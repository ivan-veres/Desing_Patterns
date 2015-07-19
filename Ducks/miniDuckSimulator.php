<?php

require_once "mallardDuck.php";
require_once "readheadDuck.php";
require_once "rubberDuck.php";
require_once "decoyDuck.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

$mallard = new MallardDuck();

$mallard->display();
$mallard->quack();
$mallard->swim();
$mallard->fly();

$readhead = new ReadheadDuck();

$readhead->display();
$readhead->quack();
$readhead->swim();
$readhead->fly();

$rubber = new RubberDuck();

$rubber->display();
$rubber->quack();
$rubber->swim();
$rubber->fly();

$decoy = new DecoyDuck();

$decoy->display();
$decoy->quack();
$decoy->swim();
$decoy->fly();