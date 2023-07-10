<?php

namespace src;


class SoldirAdaptor implements IEnemy {
    
    private Soldir $soldir;
    
    public function __construct(Soldir $soldir) {
        $this->soldir = $soldir;
    }

    public function fireCannons() {
        $this->soldir->fireGun();
    }

    public function reFillBanzeen() {
        $this->soldir->soldirEating();
    }

}
