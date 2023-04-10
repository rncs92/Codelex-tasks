<?php declare(strict_types=1);

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function withdrawal(float $amount): float
    {
        return $this->balance -= $amount;
    }

    public function balance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): float
    {
        return $this->balance += $amount;
    }
}

$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance() . PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: " . $bartos_swiss_account->balance() . PHP_EOL;
