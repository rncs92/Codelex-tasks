<?php declare(strict_types=1);

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): void
    {
        echo "{$this->getName()}, {$this->getBalance()}$" . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return round($this->balance, 2);
    }
}

$john = new BankAccount('John Doe', 13.27);
$john->show_user_name_and_balance();

$jane = new BankAccount('Jane Doe', -17.3355);
$jane->show_user_name_and_balance();