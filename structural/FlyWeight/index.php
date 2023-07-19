<?php

require_once './vendor/autoload.php';

$bankFactory = new \src\FlyBankFactory();

$bankOne = $bankFactory->getBank("111");
echo "1- " . $bankOne->createBank();
var_dump($bankOne);

$bankTwo = $bankFactory->getBank("123");
echo "2- " . $bankTwo->createBank();
var_dump($bankTwo);

$bankThree = $bankFactory->getBank("111");
echo "3- " . $bankThree->createBank();
var_dump($bankThree);

$bankFour = $bankFactory->getBank("123");
echo "4- " . $bankFour->createBank();
var_dump($bankFour);
