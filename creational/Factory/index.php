<?php

require 'vendor/autoload.php';


$bank = \src\BankFactory::getBank('1234');

if ($bank == null) {
    die("The card number is ivalid!!\n");   
}

$bank->createAccountBank();
    