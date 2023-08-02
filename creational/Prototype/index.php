<?php

use src\Animal;
use src\Human;

require 'vendor/autoload.php';

$human1 = new Human("Haydar", 33, new Animal("fifo", "cat"));
var_dump($human1);

$human2 = $human1->createClone();
$human2->setName("Abbas");
$human2->setAnimal(new Animal("lifo", "dog"));
var_dump($human2);
