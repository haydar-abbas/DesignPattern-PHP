<?php

require_once 'vendor/autoload.php';

use src\Book;
use src\Fruit;
use src\VisitorImpl;

$items = new \ArrayObject([
    new Book(20, "1234"),
    new Book(100, "5678"),
    new Fruit(10, 2, "Banana"),
    new Fruit(5, 5, "Apple")
]);

$total = calculatePrice($items);
printf("Total Cost = %d\n", $total);

function calculatePrice($items)
{
    $visitor = new VisitorImpl;
    $sum = 0;
    foreach ($items as $item) {
        $sum += $item->accept($visitor);
    }
    return $sum;
}
