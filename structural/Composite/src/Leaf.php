<?php

namespace src;

class Leaf implements Component
{
    private String $name;
    private int $price;

    public function __construct(String $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function showPrice(): void
    {
        printf("%s : %s\n", $this->name, $this->price);
    }
}
