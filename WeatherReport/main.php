<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

function getAPI($url)
{
    $client = new Client();
    $response = $client->request('GET', $url);
    $body = $response->getBody();
    return json_decode($body);
}

$city = readline('Enter the city: ');
$apiKey = 'bffeb1802821150fbb6c14966f17a1e2';
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&lang=la&appid=$apiKey";
$data = getAPI($url);


$displayTemp = round($data->main->temp, 1);
$displayFeelsLike = round($data->main->feels_like, 1);
echo "Laika prgonoze Jūsu izvēlētajai pilsētai: $data->name." . PHP_EOL;
echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' . PHP_EOL;
echo "Šobrīd: {$data->weather[0]->description}" . PHP_EOL;
echo "Gaisa tempartūra: {$displayTemp}C" . PHP_EOL;
echo "Gaisa temperatūra pēc sajūtām: {$displayFeelsLike}C" . PHP_EOL;
echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' . PHP_EOL;
echo "Gaisa mitrurms: {$data->main->humidity}%" . PHP_EOL;
echo "Vēja ātrums: {$data->wind->speed}km/h" . PHP_EOL;
echo "Mākoņinīnba: {$data->clouds->all}%" . PHP_EOL;
echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' . PHP_EOL;