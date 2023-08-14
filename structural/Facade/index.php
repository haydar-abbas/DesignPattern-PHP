<?php

require_once 'vendor/autoload.php';

$accessingBank = new src\BankAccountFacade(12345678, 1234);
$accessingBank->withDrawCash(250.00);
$accessingBank->withDrawCash(1000.00);
$accessingBank->depositCash(200.00);
