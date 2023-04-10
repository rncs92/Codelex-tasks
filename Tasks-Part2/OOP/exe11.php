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

    public static function transfer(Account $from, Account $to, int $howMuch)
    {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }

    public function withdrawal(float $amount): float
    {
        return $this->balance -= $amount;
    }

    public function deposit(float $amount): float
    {
        return $this->balance += $amount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function balance(): float
    {
        return $this->balance;
    }
}

$johnsAccount = new Account("John's account", 100.00);


echo "Initial state:" . PHP_EOL;
echo "{$johnsAccount->getName()}, {$johnsAccount->balance()}$" . PHP_EOL;


$johnsAccount->deposit(20);
echo "John's account balance is now: {$johnsAccount->balance()}$" . PHP_EOL;


echo "Final state:" . PHP_EOL;
echo "{$johnsAccount->getName()}, {$johnsAccount->balance()}$" . PHP_EOL;

echo "======================================================" . PHP_EOL;
echo "Initial state:" . PHP_EOL;

$mattsAccount = new Account("Matt's account", 1000);
echo "{$mattsAccount->getName()}, {$mattsAccount->balance()}$" . PHP_EOL;
$mattsAccount->withdrawal(100);

$myAccount = new Account('My account', 0);
echo "{$myAccount->getName()}, {$myAccount->balance()}$" . PHP_EOL;
$myAccount->deposit(100);


echo PHP_EOL;
echo "Final state:" . PHP_EOL;
echo "{$mattsAccount->getName()}, {$mattsAccount->balance()}$" . PHP_EOL;
echo "{$myAccount->getName()}, {$myAccount->balance()}$" . PHP_EOL;
echo "======================================================" . PHP_EOL;

$aAccount = new Account('A', 100);
$bAccount = new Account('B', 0);
$cAccount = new Account('C', 0);
echo "Initial state:" . PHP_EOL;
echo "{$aAccount->getName()}: {$aAccount->balance()}$" . PHP_EOL;
echo "{$bAccount->getName()}: {$bAccount->balance()}$" . PHP_EOL;
echo "{$cAccount->getName()}: {$cAccount->balance()}$" . PHP_EOL;

Account::transfer($aAccount, $bAccount, 50);
Account::transfer($bAccount, $cAccount, 25);


echo "Final state:" . PHP_EOL;
echo "{$aAccount->getName()}: {$aAccount->balance()}$" . PHP_EOL;
echo "{$bAccount->getName()}: {$bAccount->balance()}$" . PHP_EOL;
echo "{$cAccount->getName()}: {$cAccount->balance()}$" . PHP_EOL;
echo "======================================================" . PHP_EOL;

