<?php

namespace src;

class BankB implements IFlyBank
{
    public function createBank(): string
    {
        return "Bank B!\n";
    }
}
