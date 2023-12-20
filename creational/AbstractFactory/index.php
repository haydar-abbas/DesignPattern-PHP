<?php

require 'vendor/autoload.php';

use src\EuropeFinancialToolsFactory;
use src\CanadaFinancialToolsFactory;
use src\OrderProcessor;
use src\Order;

$countryCode = "EU";
$order = new Order;
$factory = [
    "EU" => new EuropeFinancialToolsFactory,
    "CA" => new CanadaFinancialToolsFactory
];
try {
    $orderProcessor = new OrderProcessor(
            $factory[$countryCode] ?? throw new \Exception("The country in not define")
    );
    $orderProcessor->processOrder($order);
} catch (Exception $exc) {
    echo $exc->getMessage();
}
