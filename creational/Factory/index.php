<?php

require 'vendor/autoload.php';

use src\BankFactory;

try {
    $bank = BankFactory::getBank('123');
    $bank->createAccountBank();
} catch (Exception $exc) {
    echo $exc->getMessage();
}
