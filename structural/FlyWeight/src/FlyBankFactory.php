<?php

namespace src;

class FlyBankFactory {

    private $banks = [];

    public function getBank($bankCode): ?IFlyBank {
        
        if (key_exists($bankCode, $this->banks)) {
            return $this->banks[$bankCode];
        }
        
        switch ($bankCode) {
            case "111":
                $this->banks[$bankCode] = new BankA();
                break;
            case "123":
                $this->banks[$bankCode] = new BankB();
                break;
            default:
                return null;
        }
        return $this->banks[$bankCode];
    }

}
