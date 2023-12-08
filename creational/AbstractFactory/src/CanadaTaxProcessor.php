<?php

namespace src;

class CanadaTaxProcessor extends TaxProcessor {

    public function calculateTaxes(Order $order): void {
        $order->setLocation("Canada");
        echo $order->getLocation() . " specific taxt calculation\n";
        echo "=============================\n";
    }
}
