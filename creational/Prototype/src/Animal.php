<?php

namespace src;

class Animal implements Prototype {

    public function __construct(
            private string $name,
            private string $type
    ) {
        
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setType($type): void {
        $this->type = $type;
    }

    public function createClone(): Prototype {
        return new Animal($this->name, $this->type);
    }
}
