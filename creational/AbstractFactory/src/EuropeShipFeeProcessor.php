<?php

namespace src;

class EuropeShipFeeProcessor extends ShipFeeProcessor {

    public function calculateShipFee(Order $order): void {
        $order->setLocation("Europe");
        echo $order->getLocation() . " specific ship fee calculation\n";
        echo "=================================\n";
    }
}
