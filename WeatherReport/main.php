<?php declare(strict_types=1);

require 'vendor/autoload.php';

use Weather\Application;
use Weather\Cast;

$weather = new Cast();
$app = new Application($weather);
$app->run();