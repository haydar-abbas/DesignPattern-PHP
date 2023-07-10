<?php

namespace src;


class Beef extends ASandwichDecorator {
    
    public function __construct(ISandwich $sandwich) {
        parent::__construct($sandwich);
    }
    
    public function getCost(): float {
        return parent::getCost() + 2.5;
    }
    
    public function getDescription(): string {
        return parent::getDescription() . ', Beef';
    }

}
