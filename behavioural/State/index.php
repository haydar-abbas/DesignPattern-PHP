<?php

use src\MobileContext;
use src\Ringing;
use src\Silent;

require_once 'vendor/autoload.php';

$phone = new MobileContext(new Ringing());
$phone->alert();

$phone->setState(new Silent());
$phone->alert();
