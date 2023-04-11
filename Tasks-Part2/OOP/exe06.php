<?php declare(strict_types=1);

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function drinkEnergy(int $surveyed, float $purchased): float
{
    return floor($surveyed * $purchased);
    throw new LogicException(";(");
}

function preferCitrus(float $purchasedNumber, float $preferCitrus): float
{
    return floor($purchasedNumber * $preferCitrus);
    throw new LogicException(";(");
}

$purchasedNumber = drinkEnergy($surveyed, $purchased_energy_drinks);
$preferCitrus = preferCitrus($purchasedNumber, $prefer_citrus_drinks);


echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . $purchasedNumber . " bought at least one energy drink." . PHP_EOL;
echo $preferCitrus . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;

