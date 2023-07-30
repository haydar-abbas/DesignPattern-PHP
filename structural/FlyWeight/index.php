<?php

require_once './vendor/autoload.php';

$bankFactory = new \src\FlyBankFactory();

$bankOne = $bankFactory->getBank("111");
$bankTwo = $bankFactory->getBank("123");
$bankThree = $bankFactory->getBank("111");
$bankFour = $bankFactory->getBank("123");
$bankFive = $bankFactory->getBank("1234");

$banks = [$bankOne, $bankTwo, $bankThree, $bankFour, $bankFive];

foreach ($banks as $index => $bank) {
    $index += 1;
    if ($bank != null) {
        echo "{$index}- {$bank->createBank()}";
        var_dump($bank);
    } else {
        die('Bank code is invalid!!');
    }
}
