<?php

require_once 'vendor/autoload.php';

$cpu = new src\Leaf("CPU", 200);
$ram = new src\Leaf("RAM", 50);
$hdd = new src\Leaf("HDD", 30);
$mouse = new src\Leaf("Mouse", 10);
$monitor = new src\Leaf("Monitor", 150);

$cabinet = new src\Composite("Cabinet");
$mb = new src\Composite("MotherBoard");
$computer = new src\Composite("Computer");
$ph = new src\Composite("Peri");

$mb->add($cpu);
$mb->add($ram);
$cabinet->add($mb);
$cabinet->add($hdd);
$ph->add($monitor);
$ph->add($mouse);
$computer->add($cabinet);
$computer->add($ph);

$computer->showPrice();
