<?php

namespace src;

interface IBankFactory {
    
    function getBank(string $bankcode): ?banks\IBank;
    function getPaymentCard(string $cardNumber): ?paymentCards\IPaymentCard;
}
