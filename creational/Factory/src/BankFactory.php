<?php

namespace src;

class BankFactory {
    
    private static ?IBank $bank;

    public static function getBank(string $bankcode): ?IBank {
        
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
