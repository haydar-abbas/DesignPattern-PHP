<?php

namespace src;

abstract class FinancialToolsFactory {

    abstract function createTaxProcessor(): TaxProcessor;

    abstract function createShipFeeProcessor(): ShipFeeProcessor;
}
