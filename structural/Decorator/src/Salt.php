<?php

namespace src;

class Salt extends ASandwichDecorator {
    
    public function __construct(ISandwich $sandwich) {
        parent::__construct($sandwich);
    }

    public function getCost(): float {
        return parent::getCost() + .3;
    }

    public function getDescription(): string {
        return parent::getDescription() . ", Salt";
    }

}
