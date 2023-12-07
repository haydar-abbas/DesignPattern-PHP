<?php

namespace src;

class Human implements Prototype {

    public function __construct(
            private string $name,
            private int $age,
            private Animal $animal
    ) {
        
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setAge($age): void {
        $this->age = $age;
    }

    public function setAnimal(Animal $animal): void {
        $this->animal = $animal;
    }

    public function createClone(): Prototype {
        return new Human($this->name, $this->age, $this->animal);
    }
}
