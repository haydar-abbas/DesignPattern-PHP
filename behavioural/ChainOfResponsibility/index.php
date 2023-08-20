<?php

require_once 'vendor/autoload.php';


$calc1 = new src\AddNumbers;
$calc2 = new src\SubtractNumbers;
$calc3 = new src\MultNumbers;
$calc4 = new src\DivideNumbers;

$calc1->setNextChain($calc2);
$calc2->setNextChain($calc3);
$calc3->setNextChain($calc4);

$request = new src\Numbers(4, 2, '+');
$calc1->calculate($request);
