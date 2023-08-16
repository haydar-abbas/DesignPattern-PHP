<?php

require_once 'vendor/autoload.php';

use src\AuthService;
use src\DataBase;
use src\RoleCheckHandler;
use src\UserExistsHandler;
use src\ValidPasswordHandler;

$database = new DataBase;
$handler = new UserExistsHandler($database);
$handler->setNextHandler(new ValidPasswordHandler($database));
$handler->setNextHandler(new RoleCheckHandler);
$service = new AuthService($handler);
$service->logIn("Haydar", "admin");
$service->logIn("Abbas", "user");
