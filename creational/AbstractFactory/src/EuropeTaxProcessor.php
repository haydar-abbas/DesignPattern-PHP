<?php

namespace src;

class EuropeTaxProcessor extends TaxProcessor {

    public function calculateTaxes(Order $order): void {
        $order->setLocation("Europe");
        echo $order->getLocation() . " specific taxt calculation\n";
        echo "=============================\n";
    }
}
