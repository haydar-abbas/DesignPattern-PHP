<?php

namespace src\paymentCards;

class VisaCard implements IPaymentCard {
    
    public function getPaymentCard(): string {
        return "VisaCard!\n";
    }

}
