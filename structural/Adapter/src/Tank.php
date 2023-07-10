<?php

namespace src;


class Tank implements IEnemy {
    
    
    public function fireCannons() {
        echo "Tank fire cannon!\n";
    }

    public function reFillBanzeen() {
        echo "Tank refill banzeen!\n";
    }

}
