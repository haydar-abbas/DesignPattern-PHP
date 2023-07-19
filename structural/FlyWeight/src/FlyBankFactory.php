<?php

namespace src;

class FlyBankFactory {

    private $banks = array();

    public function getBank($bankCode): ?IFlyBank {
        $newBank = \null;
        if (key_exists($bankCode, $this->banks)) {
            $newBank = $this->banks[$bankCode];
            return $newBank;
        }
        switch ($bankCode) {
            case "111":
                $newBank = new BankA();
                $this->banks[$bankCode] = $newBank;
                break;
            case "123":
                $newBank = new BankB();
                $this->banks[$bankCode] = $newBank;
                break;
            default:
                $newBank = null;
                break;
        }
        return $newBank;
    }

}
