<?php

require_once './vendor/autoload.php';

$enemies = new ArrayObject();

$enemies->append(new \src\Tank());
$enemies->append(new \src\Plane());
$enemies->append(new \src\SoldirAdaptor(new \src\Soldir()));

foreach ($enemies as $enemy) {
    $enemy->fireCannons();
    $enemy->reFillBanzeen();
    echo "------------------\n";
}
