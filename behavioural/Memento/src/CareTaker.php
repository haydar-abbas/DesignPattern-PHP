<?php

namespace src;

class CareTaker
{
    private $mementoList;

    public function __construct()
    {
        $this->mementoList = new \ArrayObject();
    }

    public function add(Memento $state): void
    {
        $this->mementoList->append($state);
    }

    public function get(int $index): Memento
    {
        return $this->mementoList->offsetGet($index);
    }
}
