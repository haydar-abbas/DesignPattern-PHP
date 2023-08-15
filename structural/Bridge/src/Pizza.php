<?php

namespace src;

abstract class Pizza {

    protected string $sauce;
    protected string $toppings;
    protected string $crust;

    public abstract function assemble(): void;
    public abstract function qualityCheck(): void;

    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    public function setToppings(string $toppings): void
    {
        $this->toppings = $toppings;
    }

    public function setCrust(string $crust): void
    {
        $this->crust = $crust;
    }
    
}
