<?php

namespace App;

class Business
{
    private string $name;
    private int $regCode;
    private string $type;
    private string $address;
    private string $registered;
    private ?string $terminated;

    public function __construct(
        string  $name,
        int     $regCode,
        string  $type,
        string  $address,
        string  $registered,
        ?string $terminated
    )
    {
        $this->name = $name;
        $this->regCode = $regCode;
        $this->type = $type;
        $this->address = $address;
        $this->registered = $registered;
        $this->terminated = $terminated;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getRegCode(): int
    {
        return $this->regCode;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getRegistered(): string
    {
        return $this->registered;
    }

    public function getTerminated(): string
    {
        return $this->terminated;
    }
}