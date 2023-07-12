<?php

namespace src\paymentCards;

class MasterCard implements IPaymentCard {
    
    public function getPaymentCard(): string {
        return "MasterCard!\n";
    }

}
