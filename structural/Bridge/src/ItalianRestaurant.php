<?php

namespace src;

class ItalianRestaurant extends Restaurant
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    protected function addingSauce(): void
    {
        $this->pizza->setSauce("Oil");
    }

    protected function addingToppings(): void
    {
        $this->pizza->setToppings("null");
    }

    protected function makeCrust(): void
    {
        $this->pizza->setCrust("Thin");
    }
}
