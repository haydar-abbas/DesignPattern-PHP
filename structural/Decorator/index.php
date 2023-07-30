<?php

require_once 'vendor/autoload.php';

$sandwich = new \src\BasicSandwich();
echo "Description: " . $sandwich->getDescription() . "\n";
echo "Cost: " .$sandwich->getCost() . "\n";

$sandwich = new src\Beef($sandwich);
echo "Description: " . $sandwich->getDescription() . "\n";
echo "Cost: " .$sandwich->getCost() . "\n";

$sandwich = new \src\Chees($sandwich);
echo "Description: " . $sandwich->getDescription() . "\n";
echo "Cost: " .$sandwich->getCost() . "\n";

$sandwich = new \src\Salt($sandwich);
echo "Description: " . $sandwich->getDescription() . "\n";
echo "Cost: " .$sandwich->getCost() . "\n";
