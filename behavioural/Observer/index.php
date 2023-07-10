<?php

require_once './vendor/autoload.php';

$person1 = new src\Student("Haydar");
$person2 = new src\Student("Abbas");
$person3 = new src\Student("Ali");

$subject = new \src\Course("Math");
$subject->addObserver($person1);
$subject->addObserver($person2);
$subject->addObserver($person3);

$subject->setAvailability(true);

echo "---------------------\n";

$subject->removeObserver($person2);

$subject->setAvailability(false);