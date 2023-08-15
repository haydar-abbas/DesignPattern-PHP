<?php

namespace src;

abstract class Restaurant
{
    public function __construct(protected Pizza $pizza){}

    protected abstract function addingSauce(): void;
    protected abstract function addingToppings(): void;
    protected abstract function makeCrust(): void;

    public function deliver(): void
    {
        $this->makeCrust();
        $this->addingSauce();
        $this->addingToppings();
        $this->pizza->assemble();
        $this->pizza->qualityCheck();
        echo "Order in progress...!\n";
    }
}
