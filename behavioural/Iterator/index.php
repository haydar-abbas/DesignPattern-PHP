<?php

require_once 'vendor/autoload.php';

use src\CollectionOfNames;

$companyRepository = new CollectionOfNames;
$iterator = $companyRepository->getIterator();

while ($iterator->hasNext()) {
    echo "Name: " . $iterator->next() . "\n";
}
