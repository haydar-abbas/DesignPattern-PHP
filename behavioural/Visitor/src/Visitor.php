<?php

namespace src;

interface Visitor
{
    public function visitBook(Book $book): int;
    public function visitFruit(Fruit $fruit): int;
}
