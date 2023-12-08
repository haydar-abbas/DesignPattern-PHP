<?php

namespace src;

class CanadaShipFeeProcessor extends ShipFeeProcessor {

    public function calculateShipFee(Order $order): void {
        $order->setLocation("Canada");
        echo $order->getLocation() . " specific ship fee calculation\n";
        echo "=================================\n";
    }
}
