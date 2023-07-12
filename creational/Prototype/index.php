<?php

require 'vendor/autoload.php';

$human1 = new \src\Human("Haydar", 33, new src\Animal("fifo", "cat"));
var_dump($human1);

$human2 = $human1->createClone();
$human2->setName("Abbas");
$human2->setAnimal(new src\Animal("lifo", "dog"));
var_dump($human2);
    