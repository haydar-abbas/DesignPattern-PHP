<?php

namespace src;

use src\banks\IBank;
use src\paymentCards\IPaymentCard;

interface IBankFactory
{
    function getBank(string $bankcode): ?IBank;
    function getPaymentCard(string $cardNumber): ?IPaymentCard;
}
