<?php

require_once 'vendor/autoload.php';

$sandwich1 = new \src\BasicSandwich();
echo "Description: " . $sandwich1->getDescription() . "\n";
echo "Cost: " .$sandwich1->getCost() . "\n";

$sandwich2 = new src\Beef($sandwich1);
echo "Description: " . $sandwich2->getDescription() . "\n";
echo "Cost: " .$sandwich2->getCost() . "\n";

$sandwich3 = new \src\Chees($sandwich2);
echo "Description: " . $sandwich3->getDescription() . "\n";
echo "Cost: " .$sandwich3->getCost() . "\n";

$sandwich4 = new \src\Salt($sandwich3);
echo "Description: " . $sandwich4->getDescription() . "\n";
echo "Cost: " .$sandwich4->getCost() . "\n";
