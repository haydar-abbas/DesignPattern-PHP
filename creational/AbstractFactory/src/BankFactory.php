<?php

namespace src;

use src\banks\BankA;
use src\banks\BankB;
use src\banks\IBank;
use src\paymentCards\IPaymentCard;
use src\paymentCards\MasterCard;
use src\paymentCards\VisaCard;

class BankFactory implements IBankFactory
{
    private ?IBank $bank;
    private ?IPaymentCard $paymentCard;

    public function getBank(string $bankcode): ?IBank
    {

        switch ($bankcode) {
            case '111':
                $this->bank = new BankA();
                break;
            case '123':
                $this->bank = new BankB();
                break;
            default:
                $this->bank = null;
                break;
        }

        return $this->bank;
    }

    public function getPaymentCard(string $cardNumber): ?IPaymentCard
    {

        switch ($cardNumber) {
            case '11':
                $this->paymentCard = new VisaCard();
                break;
            case '12':
                $this->paymentCard = new MasterCard();
                break;
            default:
                $this->paymentCard = null;
                break;
        }

        return $this->paymentCard;
    }
}
