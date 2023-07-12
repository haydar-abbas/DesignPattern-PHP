<?php

namespace src;

class Animal implements IPrototype {
    
    private $name;
    private $type;
    
    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }
    
    public function setName($name): void {
        $this->name = $name;
    }

    public function setType($type): void {
        $this->type = $type;
    }

    public function createClone() {
        return new Animal($this->name, $this->type);
    }

}
