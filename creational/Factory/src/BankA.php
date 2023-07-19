<?php

namespace src;


class BankA implements IFlyBank {
    
    public function createAccountBank() {
        echo "From bank A!\n";
    }

}
