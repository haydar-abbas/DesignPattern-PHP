<?php

namespace src;

abstract class TaxProcessor {

    abstract function calculateTaxes(Order $order): void;
}
