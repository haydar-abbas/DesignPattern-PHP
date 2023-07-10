<?php

namespace src;

class TV implements IElectrical {

    public const SLOT = 0;

    public function on(): void {
        echo "TV is ON!\n";
    }

    function off(): void {
        echo "TV is OFF!\n";
    }

}
