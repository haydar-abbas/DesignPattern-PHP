<?php

require_once 'vendor/autoload.php';

use src\ChatMediatorImpl;
use src\UserImp;


$mediator = new ChatMediatorImpl;
$haydar = new UserImp($mediator, "Haydar");
$abbas = new UserImp($mediator, "Abbas");
$ali = new UserImp($mediator, "Ali");
$lisa = new UserImp($mediator, "Lisa");
$mediator->addUser($haydar);
$mediator->addUser($abbas);
$mediator->addUser($ali);
$mediator->addUser($lisa);

$haydar->send("Hi All");
$lisa->send("Hi");
