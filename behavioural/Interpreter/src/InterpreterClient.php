<?php

namespace src;

class InterpreterClient
{
    private Expression $exp;

    public function interpret(String $str): string
    {
        $c = intval($str);
        if (str_contains($str, "Hexadecimal")) {
            $this->exp = new IntToHexExpression($c);
        } else if (str_contains($str, "Binary")) {
            $this->exp = new IntToBinaryExpression($c);
        } else {
            return $str;
        }
        return $this->exp->interpret(new InterpreterContext);
    }
}
