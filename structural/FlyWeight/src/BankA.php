<?php

namespace src;

class BankA implements IFlyBank {
    

    public function createBank(): string {
        return "Bank A!\n";
    }

}
