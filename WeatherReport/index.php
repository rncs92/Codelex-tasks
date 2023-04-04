<?php

$city = readline('Ievadiet pilsētu: ');
$apiKey = 'bffeb1802821150fbb6c14966f17a1e2';
$apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&lang=la&appid=$apiKey";

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, $apiUrl);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$curl_data = curl_exec($curl_handle);
curl_close($curl_handle);
$response_data = json_decode($curl_data);

$displayTemp = round($response_data->main->temp, 1);
$displayFeelsLike = round($response_data->main->feels_like, 1);
echo "Laika prgonoze Jūsu izvēlētajai pilsētai: $response_data->name." . PHP_EOL;
echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' . PHP_EOL;
echo "Šobrīd: {$response_data->weather[0]->description}" . PHP_EOL;
echo "Gaisa tempartūra: {$displayTemp}C" . PHP_EOL;
echo "Gaisa temperatūra pēc sajūtām: {$displayFeelsLike}C" . PHP_EOL;
echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' . PHP_EOL;
echo "Gaisa mitrurms: {$response_data->main->humidity}%" . PHP_EOL;
echo "Vēja ātrums: {$response_data->wind->speed}km/h" . PHP_EOL;
echo "Mākoņinīnba: {$response_data->clouds->all}%" . PHP_EOL;
echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' . PHP_EOL;