<?php

namespace src;

class AmericanRestaurant extends Restaurant
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    protected function addingSauce(): void
    {
        $this->pizza->setSauce("Super secret recipe");
    }

    protected function addingToppings(): void
    {
        $this->pizza->setToppings("Everything");
    }

    protected function makeCrust(): void
    {
        $this->pizza->setCrust("thick");
    }
}
