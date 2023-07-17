<?php

namespace src;

class Leaf implements Component {

    private String $name;
    private int $price;

    public function __construct(String $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function showPrice(): void {
        echo $this->name . " : " . $this->price . "\n";
    }

}
