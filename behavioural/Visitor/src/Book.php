<?php

namespace src;

class Book implements ItemElement
{
    private int $price;
    private String $isbnNumber;

    public function __construct(int $price, String $isbnNumber)
    {
        $this->price = $price;
        $this->isbnNumber = $isbnNumber;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getIsbnNumber(): String
    {
        return $this->isbnNumber;
    }

    public function accept(Visitor $visitor): int
    {
        return $visitor->visitBook($this);
    }
}
