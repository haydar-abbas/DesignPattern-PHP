<?php

namespace src;

class VisitorImpl implements Visitor
{
    public function visitBook(Book $book): int
    {
        $cost = 0;
        //apply 5$ discount if book price is greater than 50
        if ($book->getPrice() > 50) {
            $cost = $book->getPrice() - 5;
        } else $cost = $book->getPrice();
        printf("Book ISBN::%d cost = %d\n", $book->getIsbnNumber(), $cost);
        return $cost;
    }

    public function visitFruit(Fruit $fruit): int
    {
        $cost = $fruit->getPricePerKg() * $fruit->getWeight();
        printf("%s cost = %d\n", $fruit->getName(), $cost);
        return $cost;
    }
}
