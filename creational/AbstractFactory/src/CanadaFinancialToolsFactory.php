<?php

namespace src;

class CanadaFinancialToolsFactory extends FinancialToolsFactory {

    public function createShipFeeProcessor(): ShipFeeProcessor {
        return new CanadaShipFeeProcessor;
    }

    public function createTaxProcessor(): TaxProcessor {
        return new CanadaTaxProcessor;
    }
}
