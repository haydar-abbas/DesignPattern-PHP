<?php

namespace src;

class IntToHexExpression implements Expression
{
    public function __construct(private int $i)
    {
    }

    public function interpret(InterpreterContext $ic)
    {
        return $ic->getHexadecimalFormat($this->i);
    }
}
