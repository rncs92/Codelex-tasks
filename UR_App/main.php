<?php declare(strict_types=1);

require 'vendor/autoload.php';

use App\ApiClient;
use App\Application;
use App\Registry;


$apiClient = new ApiClient();
$registry = new Registry($apiClient->getData());
$app = new Application($registry);
$app->run();
