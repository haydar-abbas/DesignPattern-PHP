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
    public function getBank(string $bankcode): ?Bank
    {
        switch ($bankcode) {
            case '111':
                return new BankA;
            case '123':
                return new BankB;
            default:
                return null;
        }
    }

    public function getPaymentCard(string $cardNumber): ?IPaymentCard
    {
        switch ($cardNumber) {
            case '11':
                return new VisaCard;
            case '12':
                return new MasterCard;
            default:
                return null;
        }
    }
}
