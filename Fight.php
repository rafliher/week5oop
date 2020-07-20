<?php

require_once('Hewan.php');

abstract class Fight extends Hewan {
    protected $attackPower;
    protected $defensePower;
    abstract function serang($target);
    abstract function diserang($attacker);
}

?>