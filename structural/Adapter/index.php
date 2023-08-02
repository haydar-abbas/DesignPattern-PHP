<?php

use src\Plane;
use src\Soldir;
use src\SoldirAdaptor;
use src\Tank;

require_once 'vendor/autoload.php';

$enemies = new ArrayObject();

$enemies->append(new Tank());
$enemies->append(new Plane());
$enemies->append(new SoldirAdaptor(new Soldir()));

foreach ($enemies as $enemy) {
    $enemy->fireCannons();
    $enemy->reFillBanzeen();
    echo "------------------\n";
}
