<?php

require_once __DIR__ . '/vendor/autoload.php';

use Zm\Data\people;

// cara guna package monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$people = new people("Along");

// echo "Hello World Composer" . PHP_EOL;

echo $people->sayHello("Busu") . PHP_EOL;

$log = new Logger("Cuba Guna Package Monolog");
$log->pushHandler(new StreamHandler("application.log", Level::Info));

$log->info("Cuba guna logger");
$log->info("Berjaya Cuba guna logger");