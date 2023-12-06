<?php

namespace src;

class BankA implements Bank
{
    public function createAccountBank()
    {
        echo "From bank A!\n";
    }
}
