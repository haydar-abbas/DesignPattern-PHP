<?php

namespace src\banks;

class BankB implements IFlyBank {
    
    public function createAccountBank(): string {
        return "From bank B!\n";
    }

}
