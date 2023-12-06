<?php

namespace src;

use src\banks\Bank;
use src\paymentCards\PaymentCard;

interface BankFactory
{
    function getBank(string $bankcode): ?Bank;
    function getPaymentCard(string $cardNumber): ?PaymentCard;
}
