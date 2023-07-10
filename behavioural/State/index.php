<?php

require_once './vendor/autoload.php';

$phone = new src\MobileContext(new \src\Ringing());
$phone->alert();

$phone->setState(new \src\Silent());
$phone->alert();
