<?php

namespace src\banks;

class BankB implements Bank
{
    public function createAccountBank(): string
    {
        return "From bank B!\n";
    }
}
