<?php

require 'vendor/autoload.php';

$bankFactory = new \src\BankFactory();
$bank = $bankFactory->getBank('111');
$paymentCard = $bankFactory->getPaymentCard("12");

if ($bank == null) {
    die("The Bank number is ivalid!!\n");   
}
if ($paymentCard == null) {
    die("The Card number is ivalid!!\n");   
}

echo $bank->createAccountBank();
echo $paymentCard->getPaymentCard();
    