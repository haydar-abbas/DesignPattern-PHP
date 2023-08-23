<?php

require_once 'vendor/autoload.php';


$originator = new src\Originator;
$careTaker = new src\CareTaker;

$originator->setState("State #1");
$careTaker->add($originator->saveStateToMemento());
$originator->setState("State #2");
$careTaker->add($originator->saveStateToMemento());
$originator->setState("State #3");
$careTaker->add($originator->saveStateToMemento());
$originator->setState("State #4");

printf("Current State: %s\n", $originator->getState());
$originator->getStateFromMemento($careTaker->get(0));
printf("First saved State: %s\n", $originator->getState());
$originator->getStateFromMemento($careTaker->get(1));
printf("Second saved State: %s\n", $originator->getState());
$originator->getStateFromMemento($careTaker->get(2));
printf("Third saved State: %s\n", $originator->getState());
