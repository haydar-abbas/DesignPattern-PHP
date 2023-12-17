<?php

namespace src;

class BankFactory {

    public static function getBank(string $bankcode): Bank {

        $array_banks = [
            '111' => new BankA,
            '123' => new BankB
        ];

        return $array_banks[$bankcode] ?? throw new \Exception("The card number is invalid!!\n");
    }
}
