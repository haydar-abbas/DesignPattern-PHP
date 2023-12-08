<?php

namespace src;

abstract class ShipFeeProcessor {

    abstract function calculateShipFee(Order $order): void;
}
