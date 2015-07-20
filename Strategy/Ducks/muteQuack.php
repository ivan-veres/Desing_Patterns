<?php

require_once "quackBehavior.php";

/**
 * @package     SimUDuck app
 * @reference   Head First Design Patterns, O'REILLY
 */

class MuteQuack implements quackBehavior
{
    public function quack()
    {
        echo "Make's no sound...\n";
    }
}