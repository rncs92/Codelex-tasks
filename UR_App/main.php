<?php declare(strict_types=1);

require 'vendor/autoload.php';

use App\ApiClient;
use App\Application;

$client = new ApiClient();
//$client->getData();
//$registry = new \App\UznemRegistrs($client);
//$registry->addBusiness();
$app = new Application($client);
$app->run();
