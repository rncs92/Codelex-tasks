<?php declare(strict_types=1);

require 'vendor/autoload.php';

use App\ApiClient;
use App\Application;
use App\Registry;

/*
$client = new ApiClient();
//$client->getData();
//$registry = new \App\UznemRegistrs($client);
//$registry->addBusiness();
$app = new Application($client);
$app->run();
*/

$apiClient = new ApiClient();
$registry = new Registry($apiClient->getData());
$app = new Application($registry);
$app->run();