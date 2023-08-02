<?php

namespace src;

class BankB implements IBank
{
    public function createAccountBank()
    {
        echo "From bank B!\n";
    }
}
