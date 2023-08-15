<?php

namespace src;

abstract class Restaurant
{
    public function __construct(protected Pizza $pizza){}

    public abstract function addingSauce(): void;
    public abstract function addingToppings(): void;
    public abstract function makeCrust(): void;

    public function deliver(): void
    {
        $this->makeCrust();
        $this->addingSauce();
        $this->addingToppings();
        $this->pizza->assemble();
        $this->pizza->qualityCheck();
        echo "Order in progress!\n";
    }

}
