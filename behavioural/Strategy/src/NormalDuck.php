<?php

namespace src;

class NormalDuck extends ADuck {
    
    public function __construct(string $name) {
        $this->name = $name;
        $this->flyBehavior = new FlyBehavior\FlyWithWings();
    }

    
}
