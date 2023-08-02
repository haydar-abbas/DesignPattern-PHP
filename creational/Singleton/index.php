<?php


require_once 'vendor/autoload.php';

use src\DB;

$con1 = DB::getInstance();
$con2 = DB::getInstance();
$con3 = DB::getInstance();

var_dump($con1, $con2, $con3);
