<?php

namespace src;

class BankFactory implements IBankFactory {

    private ?banks\IBank $bank;
    private ?paymentCards\IPaymentCard $paymentCard;

    public function getBank(string $bankcode): ?banks\IBank {

        switch ($bankcode) {
            case '111':
                $this->bank = new banks\BankA();
                break;
            case '123':
                $this->bank = new banks\BankB();
                break;
            default:
                $this->bank = null;
                break;
        }

        return $this->bank;
    }

    public function getPaymentCard(string $cardNumber): ?paymentCards\IPaymentCard {
        
        switch ($cardNumber) {
            case '11':
                $this->paymentCard = new paymentCards\VisaCard();
                break;
            case '12':
                $this->paymentCard = new paymentCards\MasterCard();
                break;
            default:
                $this->paymentCard = null;
                break;
        }

        return $this->paymentCard;
    }

}
