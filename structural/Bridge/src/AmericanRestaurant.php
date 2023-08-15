<?php

namespace src;

class AmericanRestaurant extends Restaurant
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function addingSauce(): void
    {
        $this->pizza->setSauce("Super secret recipe");
    }

    public function addingToppings(): void
    {
        $this->pizza->setToppings("Everything");
    }

    public function makeCrust(): void
    {
        $this->pizza->setCrust("thick");
    }
    
}
