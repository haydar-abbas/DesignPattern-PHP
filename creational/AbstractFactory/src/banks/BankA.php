<?php

namespace src\banks;

class BankA implements Bank
{
    public function createAccountBank(): string
    {
        return "From bank A!\n";
    }
}
