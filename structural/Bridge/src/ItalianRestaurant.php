<?php

namespace src;

class ItalianRestaurant extends Restaurant
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function addingSauce(): void
    {
        $this->pizza->setSauce("Oil");
    }

    public function addingToppings(): void
    {
        $this->pizza->setToppings("null");
    }

    public function makeCrust(): void
    {
        $this->pizza->setCrust("Thin");
    }
}
