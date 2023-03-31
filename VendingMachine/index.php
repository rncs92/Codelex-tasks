<?php declare (strict_types=1);

$userCredits = 0;

function addProduct(string $name, int $price): stdClass
{
    $product = new stdClass;
    $product->name = $name;
    $product->price = $price;

    return $product;
}

$products = [
    '1' => addProduct('(1) Coffee M     ', 181),
    '2' => addProduct('(2) Coffee L     ', 222),
    '3' => addProduct('(3) Coffee XL    ', 255),
    '4' => addProduct('(4) Apple Juice  ', 116),
    '5' => addProduct('(5) Lays Original', 217),
    '6' => addProduct('(6) Snickers     ', 89),
    '7' => addProduct('(7) Water        ', 77)
];

$coins = [
    200, 100, 50, 20, 10, 5, 2, 1
];

echo "===============================" . PHP_EOL;
echo "    Johnny`s Vending Machine" . PHP_EOL;
echo "===============================" . PHP_EOL;

foreach ($products as $key => $product) {
    $price = $product->price / 100;
    echo "| $product->name";
    echo " |";
    echo " {$price}eur";
    echo " |" . PHP_EOL;
}
echo "===============================" . PHP_EOL;

function getReminder(int $reminder, array $coins): void
{
    $displayReminder = $reminder / 100;
    echo "Your total reminder is {$displayReminder}eur" . PHP_EOL;
    echo "Please take your change! If there is some." . PHP_EOL;
    foreach ($coins as $coin) {
        if ($reminder <= 0) {
            return;
        }

        $times = floor($reminder / $coin);
        if ($times > 0) {
            $displayCoin = $coin / 100;
            echo "{$displayCoin}eur given." . PHP_EOL;
        }
        $reminder -= $coin * $times;
        $displayReminder2 = $reminder / 100;
        if ($times > 0) {
            echo "Reminder is {$displayReminder2}eur" . PHP_EOL;
        }
    }
}

while (true) {
    $displayCredits = $userCredits / 100;

    echo "User credits: {$displayCredits}eur" . PHP_EOL;

    $itemToBuy = readline('What do you want to buy? Press selected button: ');
    if (!array_key_exists(strtolower($itemToBuy), $products)) {
        echo 'There is no such item!' . PHP_EOL;
        exit;
    } else {
        $selectedItem = $products[$itemToBuy];
    }

    $displayName = trim($selectedItem->name);
    $displayPrice = $selectedItem->price / 100;
    echo "The item you want to buy is $displayName, it costs {$displayPrice}eur." . PHP_EOL;

    $creditAmount = readline('How much credits do you want to add? (In cents): ');
    if (!in_array($creditAmount, $coins)) {
        echo 'Not a valid coin.' . PHP_EOL;
    } else {
        $userCredits += (int)$creditAmount;
    }

    if ($userCredits < $selectedItem->price) {
        echo 'You have to add more credits, not enough credits to buy selected item! ' . PHP_EOL;
    }

    if ($userCredits >= $selectedItem->price) {
        echo 'You have enough credits to buy selected product!' . PHP_EOL;
        $reminder = $userCredits - $selectedItem->price;
        getReminder($reminder, $coins);
        echo 'Thank you for using Johnny`s wending machine.' . PHP_EOL;
        echo "Have a great day!" . PHP_EOL;
        exit;
    }
}
