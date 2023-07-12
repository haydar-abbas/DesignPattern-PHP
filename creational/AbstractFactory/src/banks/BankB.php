<?php

namespace src\banks;

class BankB implements IBank {
    
    public function createAccountBank(): string {
        return "From bank B!\n";
    }

}
