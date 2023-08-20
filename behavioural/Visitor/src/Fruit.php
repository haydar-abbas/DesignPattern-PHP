<?php

namespace src;

class Fruit implements ItemElement
{
    private int $pricePerKg;
    private int $weight;
    private string $name;

    public function __construct(int $pricePerKg, int $weight, string $name)
    {
        $this->pricePerKg = $pricePerKg;
        $this->weight = $weight;
        $this->name = $name;
    }

    public function getPricePerKg(): int
    {
        return $this->pricePerKg;
    }


    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function accept(Visitor $visitor): int
    {
        return $visitor->visitFruit($this);
    }
}
