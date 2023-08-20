<?php

namespace src;

class Numbers
{
    private int $num1;
    private int $num2;
    private string $operation;

    public function __construct(int $num1, int $num2, string $operation)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operation = $operation;
    }

    public function getNumOne(): int
    {
        return $this->num1;
    }

    public function getNumTwo(): int
    {
        return $this->num2;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }
}
