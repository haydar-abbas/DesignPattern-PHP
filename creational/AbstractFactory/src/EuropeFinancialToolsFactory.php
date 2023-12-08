<?php

namespace src;

class EuropeFinancialToolsFactory extends FinancialToolsFactory {

    public function createShipFeeProcessor(): ShipFeeProcessor {
        return new EuropeShipFeeProcessor;
    }

    public function createTaxProcessor(): TaxProcessor {
        return new EuropeTaxProcessor;
    }
}
