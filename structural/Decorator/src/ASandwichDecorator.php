<?php

namespace src;

abstract class ASandwichDecorator implements ISandwich {

    private ISandwich $sandwich;

    public function __construct(ISandwich $sandwich) {
        $this->sandwich = $sandwich;
    }

    public function getCost(): float {
        return $this->sandwich->getCost();
    }

    public function getDescription(): string {
        return $this->sandwich->getDescription();
    }

}
