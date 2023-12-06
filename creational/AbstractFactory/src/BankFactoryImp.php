<?php

namespace src;

use src\banks\BankA;
use src\banks\BankB;
use src\banks\Bank;
use src\paymentCards\PaymentCard;
use src\paymentCards\MasterCard;
use src\paymentCards\VisaCard;

class BankFactoryImp implements BankFactory
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

    public function getPaymentCard(string $cardNumber): ?PaymentCard
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
