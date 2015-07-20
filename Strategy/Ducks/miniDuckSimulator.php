<?php

require_once "mallardDuck.php";
require_once "redheadDuck.php";
require_once "rubberDuck.php";
require_once "decoyDuck.php";
require_once "flyRocketPowered.php";
require_once "modelDuck.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

$mallard = new MallardDuck();

$mallard->display();
$mallard->swim();
$mallard->performFly();
$mallard->performQuack();

$model = new ModelDuck();
$model->display();
$model->swim();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();

$redhead = new RedheadDuck();

$redhead->display();
$redhead->swim();
$redhead->performQuack();
$redhead->performFly();

$rubber = new RubberDuck();

$rubber->display();
$rubber->swim();
$rubber->performQuack();
$rubber->performFly();

$decoy = new DecoyDuck();

$decoy->display();
$decoy->swim();
$decoy->performQuack();
$decoy->performFly();