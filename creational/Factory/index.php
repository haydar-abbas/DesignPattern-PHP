<?php

use src\BankFactoryImp;

require 'vendor/autoload.php';


$bank = BankFactoryImp::getBank('123');

if ($bank == null) {
    die("The card number is ivalid!!\n");
}

$bank->createAccountBank();
