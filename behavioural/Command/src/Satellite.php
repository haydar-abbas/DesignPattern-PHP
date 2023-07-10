<?php

namespace src;

class Satellite implements IElectrical {
    
    public const SLOT = 1;


    public function off(): void {
        echo "Satellite is OFF..!\n";
    }

    public function on(): void {
         echo "Satellite is ON..!\n";
    }

}
