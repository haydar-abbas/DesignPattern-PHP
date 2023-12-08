<?php

namespace src;

class OrderProcessor {

    private ?TaxProcessor $taxProcessor = null;
    private ?ShipFeeProcessor $shipFeeProcessor = null;

    public function __construct(FinancialToolsFactory $factory) {
        $this->taxProcessor = $factory->createTaxProcessor();
        $this->shipFeeProcessor = $factory->createShipFeeProcessor();
    }

    public function processOrder(Order $order): void {
        $this->taxProcessor->calculateTaxes($order);
        $this->shipFeeProcessor->calculateShipFee($order);
    }
}
