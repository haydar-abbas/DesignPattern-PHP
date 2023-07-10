<?php

require_once './vendor/autoload.php';

$sites = ["youtube", "facebook", "twitter", "tiktok", "linkedin"];

$isp = new \src\Proxy(new src\Zain());

foreach ($sites as $site) {
    echo $isp->serveSite($site) . "\n";
}