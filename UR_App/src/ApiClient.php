<?php

namespace App;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getData(): array
    {
        $url = 'https://data.gov.lv/dati/lv/api/3/action/datastore_search?resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9&limit=50';
        $response = $this->client->request('GET', $url);
        $businessData = json_decode($response->getBody());
        return $businessData->result->records;
    }
}
