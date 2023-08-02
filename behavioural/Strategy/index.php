<?php

use src\FlyBehavior\FlyNoFly;
use src\FlyBehavior\FlyWithRocket;
use src\NormalDuck;

require_once 'vendor/autoload.php';

$duck = new NormalDuck("Lolo");
echo $duck->fly();

$duck->setFlyBehavior(new FlyWithRocket());
echo $duck->fly();

$duck->setFlyBehavior(new FlyNoFly());
echo $duck->fly();
