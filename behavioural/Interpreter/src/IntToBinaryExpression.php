<?php

namespace src;

class IntToBinaryExpression implements Expression
{
    public function __construct(private int $i)
    {
    }

    public function interpret(InterpreterContext $ic)
    {
        return $ic->getBinaryFormat($this->i);
    }
}
