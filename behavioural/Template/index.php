<?php

require_once 'vendor/autoload.php';

$car = new src\Car();
$car->buildVehicle();

echo "=========================\n";

$truck = new \src\Truck();
$truck->buildVehicle();
