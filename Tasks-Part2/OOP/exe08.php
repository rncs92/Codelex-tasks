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

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdrawal(float $amount): float
    {
        return $this->balance -= $amount;
    }

    public function deposit(float $amount): float
    {
        return $this->balance += $amount;
    }

    public function addInterest(): float
    {
        $months = 12;
        $monthlyInterest = $this->annualInterestRate / $months;
        return $this->balance += ($this->balance * $monthlyInterest) / 100;
    }
}


$balance = (float)readline('How much money is in the account?: ');
$interestRate = (float)readline('Enter the annual interest rate: ');
$months = readline('How long has the account been opened? ');
$totalDeposits = 0;
$totalWithdrawals = 0;

$person = new SavingsAccount($interestRate, $balance);

while ($months > 0) {

    $monthlyDeposit = (float)readline('Enter amount deposited for month: ');
    $person->deposit($monthlyDeposit);
    $totalDeposits += $monthlyDeposit;


    $monthlyWithdrawal = (float)readline('Enter amount withdrawn for month: ');
    $person->withdrawal($monthlyWithdrawal);
    $totalWithdrawals -= $monthlyWithdrawal;

    $person->addInterest();
    $months--;
}

$totalInterest = round(($person->getBalance() - $balance) - ($totalDeposits + $totalWithdrawals), 2);
$endingBalance = round($person->getBalance(), 2);

echo "Total deposited: {$totalDeposits}$" . PHP_EOL;
echo "Total withdrawn: {$totalWithdrawals}$" . PHP_EOL;
echo "Interest earned: {$totalInterest}$" . PHP_EOL;
echo "Ending balance: {$endingBalance}$" . PHP_EOL;
