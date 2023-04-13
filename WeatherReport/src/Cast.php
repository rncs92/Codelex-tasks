<?php

namespace Weather;

use GuzzleHttp\Client;

class Cast
{
    private string $apiKey;

    public function __construct(string $apiKey = 'bffeb1802821150fbb6c14966f17a1e2')
    {
        $this->apiKey = $apiKey;
    }

    public function getAPI(string $city): object
    {
        $client = new Client();
        $apiKey = $this->apiKey;
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&lang=la&appid=$apiKey";
        $response = $client->request('GET', $url);
        $body = $response->getBody();
        return json_decode($body);
    }
}