<?php

namespace src\banks;


class BankA implements IBank {
    
    public function createAccountBank(): string {
        return "From bank A!\n";
    }

}
