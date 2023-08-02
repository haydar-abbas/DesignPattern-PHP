<?php

use src\Course;
use src\Student;

require_once 'vendor/autoload.php';

$person1 = new Student("Haydar");
$person2 = new Student("Abbas");
$person3 = new Student("Ali");

$subject = new Course("Math");
$subject->addObserver($person1);
$subject->addObserver($person2);
$subject->addObserver($person3);

$subject->setAvailability(true);

echo "---------------------\n";

$subject->removeObserver($person2);

$subject->setAvailability(false);
