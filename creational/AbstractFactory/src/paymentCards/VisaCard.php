<?php

namespace src\paymentCards;

class VisaCard implements PaymentCard {
    
    public function getPaymentCard(): string {
        return "VisaCard!\n";
    }

}
