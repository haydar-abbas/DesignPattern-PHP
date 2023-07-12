<?php

require_once './vendor/autoload.php';

$duck = new src\NormalDuck("Lolo");
echo $duck->fly();

$duck->setFlyBehavior(new src\FlyBehavior\FlyWithRocket());
echo $duck->fly();

$duck->setFlyBehavior(new \src\FlyBehavior\FlyNoFly());
echo $duck->fly();
