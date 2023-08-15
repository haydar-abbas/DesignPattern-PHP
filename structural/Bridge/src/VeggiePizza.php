<?php

namespace src;

class VeggiePizza extends Pizza
{
    public function assemble(): void
    {
        echo "Veggie Pizza:\n";
        printf("Adding sauce: %s\n", $this->sauce);
        printf("Adding Toppings: %s\n", $this->toppings);
        echo "Adding Cheese\n";
    }

    public function qualityCheck(): void
    {
        printf("Crust is: %s\n", $this->crust);
    }
}
