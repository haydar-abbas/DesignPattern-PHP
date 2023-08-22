<?php

namespace src;

class InterpreterContext
{
    public function getBinaryFormat(int $i): string
    {
        return decbin($i);
    }

    public function getHexadecimalFormat(int $i): string
    {
        return dechex($i);
    }
}
