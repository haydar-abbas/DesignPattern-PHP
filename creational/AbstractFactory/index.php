<?php

use src\BankFactory;

require 'vendor/autoload.php';

$bankFactory = new BankFactory();
$bank = $bankFactory->getBank('123');
$paymentCard = $bankFactory->getPaymentCard("11");

if ($bank == null) {
    die("The Bank number is ivalid!!\n");
}
if ($paymentCard == null) {
    die("The Card number is ivalid!!\n");
}

echo $bank->createAccountBank();
echo $paymentCard->getPaymentCard();
