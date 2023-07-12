<?php

namespace src;

class Human implements IPrototype {

    private $name;
    private $age;
    private Animal $animal;

    public function __construct($name, $age, Animal $animal) {
        $this->name = $name;
        $this->age = $age;
        $this->animal = $animal;
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

    public function createClone() {
        return new Human($this->name, $this->age, $this->animal);
    }

}