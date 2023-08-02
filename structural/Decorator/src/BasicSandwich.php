<?php

namespace src;

class BasicSandwich implements ISandwich
{
    public function getCost(): float
    {
        return 9.5;
    }

    public function getDescription(): string
    {
        return "Bread";
    }
}
