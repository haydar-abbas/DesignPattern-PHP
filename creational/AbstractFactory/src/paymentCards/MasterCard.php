<?php

namespace src\paymentCards;

class MasterCard implements PaymentCard {
    
    public function getPaymentCard(): string {
        return "MasterCard!\n";
    }

}
