<?php

use src\BankFactory;

require 'vendor/autoload.php';

$bankFactory = new BankFactory();
$bank = $bankFactory->getBank('111');
$paymentCard = $bankFactory->getPaymentCard("12");

if ($bank == null) {
    die("The Bank number is ivalid!!\n");
}
if ($paymentCard == null) {
    die("The Card number is ivalid!!\n");
}
var_dump($bank, $paymentCard);
echo $bank->createAccountBank();
echo $paymentCard->getPaymentCard();
