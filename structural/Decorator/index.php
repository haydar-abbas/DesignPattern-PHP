<?php

require_once 'vendor/autoload.php';

$sandwich = new \src\BasicSandwich();
printf("Description: %s\n", $sandwich->getDescription());
printf("Cost: %.1f\n", $sandwich->getCost());

$sandwich = new src\Beef($sandwich);
printf("Description: %s\n", $sandwich->getDescription());
printf("Cost: %.1f\n", $sandwich->getCost());

$sandwich = new \src\Chees($sandwich);
printf("Description: %s\n", $sandwich->getDescription());
printf("Cost: %.1f\n", $sandwich->getCost());

$sandwich = new \src\Salt($sandwich);
printf("Description: %s\n", $sandwich->getDescription());
printf("Cost: %.1f\n", $sandwich->getCost());
