<?php declare(strict_types=1);

class SavingsAccount
{
    private float $annualInterestRate;
    private float $balance;

    public function __construct(float $annualInterestRate, float $balance)
    {
        $this->annualInterestRate = $annualInterestRate;
        $this->balance = $balance;
    }

    public function withdrawal(float $amount): float
    {
        return $this->balance - $amount;
    }

    public function deposit(float $amount): float
    {
        return $this->balance + $amount;
    }

    public function addInterest(): float
    {
        return $this->balance += ($this->balance * $this->annualInterestRate) / 100;
    }
}
