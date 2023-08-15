<?php

require_once 'vendor/autoload.php';

use src\AmericanRestaurant;
use src\ItalianRestaurant;
use src\PepperoniPizza;
use src\VeggiePizza;

$american_restaurant = new AmericanRestaurant(new PepperoniPizza);
$american_restaurant->deliver();

echo "-------------------\n";

$italianRestaurant = new ItalianRestaurant(new VeggiePizza);
$italianRestaurant->deliver();
