<?php

namespace App;

use App\ApiClient;

class UznemRegistrs
{
    private array $businesses;
    private ApiClient $client;

    public function __construct(ApiClient $client, array $businesses = [])
    {
        foreach ($businesses as $business) {
            $this->addBusiness();
        }
        $this->client = $client;
        $this->businesses = $businesses;
    }

    public function addBusiness(): void
    {
        $data = $this->client->getData();
        foreach ($data->result->records as $business) {
            $this->businesses[] = $business;
        }
    }

    public function getBusinesses(): array
    {
        return $this->businesses;
    }
}





