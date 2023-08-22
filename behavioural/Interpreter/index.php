<?php

require_once 'vendor/autoload.php';

use src\InterpreterClient;


$str1 = "15 in Binary";
$str2 = "15 in Hexadecimal";

$ec = new InterpreterClient;
echo $str1 . " = " . $ec->interpret($str1) . "\n";
echo $str2 . " = " . $ec->interpret($str2);
