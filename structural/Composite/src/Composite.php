<?php

namespace src;

class Composite implements Component {

    private string $name;
    private \ArrayObject $components;

    public function __construct(string $name) {
        $this->name = $name;
        $this->components = new \ArrayObject();
    }

    public function add($component): void {
        $this->components->append($component);
    }

    public function showPrice(): void {
        echo $this->name . "\n";
        foreach ($this->components as $component) {
            echo $component->showPrice();
        }
    }

}
