<?php

namespace src\banks;


class BankA implements IFlyBank {
    
    public function createAccountBank(): string {
        return "From bank A!\n";
    }

}
