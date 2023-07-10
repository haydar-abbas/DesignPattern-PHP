<?php

namespace src;

class BasicSandwich implements ISandwich {

    public function getCost(): float {
        return 10;
    }

    public function getDescription(): string {
        return "Bread";
    }

}
