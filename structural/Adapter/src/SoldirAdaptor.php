<?php

namespace src;

class SoldirAdaptor implements Enemy {

    public function __construct(private Soldir $soldir) {
        
    }

    public function fireCannons() {
        $this->soldir->fireGun();
    }

    public function reFillBanzeen() {
        $this->soldir->soldirEating();
    }
}
