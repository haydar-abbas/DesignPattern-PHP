<?php

namespace src;

class Memento
{
    public function __construct(private string $state)
    {
    }

    public function getState(): string
    {
        return $this->state;
    }
}
