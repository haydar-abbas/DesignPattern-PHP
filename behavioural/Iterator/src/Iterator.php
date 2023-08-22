<?php

namespace src;

interface Iterator
{
    public function hasNext(): bool;
    public function next(): mixed;
}
