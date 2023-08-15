<?php

namespace src;

class PepperoniPizza extends Pizza
{
    public function assemble(): void
    {
        echo "Pepperoni Pizza:\n";
        printf("Adding sauce: %s\n", $this->sauce);
        printf("Adding Toppings: %s\n", $this->toppings);
        echo "Adding Pepperoni\n";
    }

    public function qualityCheck(): void
    {
        printf("Crust is: %s\n", $this->crust);
    }
}
