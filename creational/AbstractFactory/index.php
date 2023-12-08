<?php

require 'vendor/autoload.php';

use src\EuropeFinancialToolsFactory;
use src\CanadaFinancialToolsFactory;
use src\OrderProcessor;
use src\Customer;
use src\Order;

$countryCode = "CAq";
$customer = new Customer;
$order = new Order;
$orderProcessor = null;
$factory = null;

if ($countryCode == "EU") {
    $factory = new EuropeFinancialToolsFactory;
} else if ($countryCode == "CA") {
    $factory = new CanadaFinancialToolsFactory;
}

$orderProcessor = new OrderProcessor($factory);
$orderProcessor->processOrder($order);
