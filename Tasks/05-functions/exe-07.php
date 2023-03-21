<?php

$person = new stdClass();
$person->name = 'John';
$person->license = ['A', 'B', 'C'];
$person->cash = 200000;

$cash = $person->cash / 100;
$license = implode(', ', $person->license);

echo "---------------------------" . PHP_EOL;
echo "C  U  S  T  O  M  E  R" . PHP_EOL;
echo "---------------------------" . PHP_EOL;
echo "| {$person->name} | {$cash}$ | {$license} |" . PHP_EOL;
echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
echo "S    T    O    R    E" . PHP_EOL;
echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

function addWeapon(string $name, string $license, int $price): stdClass
{
    $weapon = new stdClass;
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;

    return $weapon;
}




$weapons = [
    'knife' => addWeapon('Knife', 'A', 500),
    'deserteagle' => addWeapon('DesertEagle', 'B', 15000),
    'mk60' => addWeapon('MK60', 'C', 250000),
    'ak47' => addWeapon('AK47', 'D', 150000)
];


foreach ($weapons as $key => $weapon) {
    $price = $weapon->price / 100;
    echo "| $weapon->name | {$price}$ | $weapon->license |" . PHP_EOL;
}

$selection = readline('Choose your item: ');

if (!array_key_exists($selection, $weapons)) {
    echo 'There is no such item.' . PHP_EOL;
    exit;
}

$weaponChoice = $weapons[$selection];

if (!in_array($weaponChoice->license, $person->license)) {
    echo 'You dont have the right license to use this weapon.' . PHP_EOL;
    exit;
}

if ($weaponChoice->price > $person->cash) {
    echo 'You dont have enough money to buy this weapon!' . PHP_EOL;
    exit;
}


echo 'Weapon successfully bought!' . PHP_EOL;
$bought = $person->cash -= $weaponChoice->price;
echo "You have " . $bought / 100 . "$ cash left." . PHP_EOL;


