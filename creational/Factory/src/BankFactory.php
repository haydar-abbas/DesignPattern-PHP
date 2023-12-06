<?php

namespace src;

class BankFactoryImp
{
    private static ?Bank $bank;

    public static function getBank(string $bankcode): ?Bank
    {

        switch ($bankcode) {
            case '111':
                self::$bank = new BankA();
                break;
            case '123':
                self::$bank = new BankB();
                break;
            default:
                self::$bank = null;
                break;
        }

        return self::$bank;
    }
}
