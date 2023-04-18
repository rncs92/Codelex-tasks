<?php

namespace App;

use App\ApiClient;

class Registry
{
    private array $businesses;

    public function __construct(array $businesses = [])
    {
        $this->businesses = $businesses;
    }

    public function getBusinesses(): array
    {
        return $this->businesses;
    }

    public function getRegcode(): array
    {
        $regcode = [];
        foreach ($this->businesses as $business) {
            $regcode[] = $business->regcode;
        }
        return $regcode;
    }
}





