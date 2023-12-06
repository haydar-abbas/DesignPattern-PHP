<?php

namespace src;

use src\banks\IBank;
use src\paymentCards\IPaymentCard;

interface IBankFactory
{
    function getBank(string $bankcode): ?Bank;
    function getPaymentCard(string $cardNumber): ?IPaymentCard;
}
