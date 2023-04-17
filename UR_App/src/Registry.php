<?php

namespace App;

use App\ApiClient;

class Registry
{
    private array $businesses;

    public function __construct(array $businesses = [])
    {
        foreach ($businesses as $business) {
            $this->addBusiness();
        }
        $this->businesses = $businesses;
    }

    public function addBusiness(): void
    {

    }

    public function getBusinesses(): array
    {
        return $this->businesses;
    }

    public function business(): Business
    {
        foreach ($this->businesses as $business) {
            $name = $business->name;
            $regcode = $business->regcode;
            $type = $business->type;
            $address = $business->address;
            $registered = $business->registered;
            $terminated = $business->terminated;
        }

        return new Business(
            $name,
            $regcode,
            $type,
            $address,
            $registered,
            $terminated);
    }
}





