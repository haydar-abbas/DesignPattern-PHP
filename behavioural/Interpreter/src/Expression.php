<?php

namespace src;

interface Expression
{
    public function interpret(InterpreterContext $ic);
}
