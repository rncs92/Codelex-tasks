<?php

$fruits =[
    [
        'name' => 'orange',
        'weight' => 2
    ],
    [
        'name' => 'banana',
        'weight' => 2.5
    ],
    [
        'name' => 'watermelon',
        'weight' => 11
    ],
    [
        'name' => 'pumpkin',
        'weight' => 17
    ]
];

$shipping_cost = [
    '<=10kg' => '1eur',
    '>10kg' => '2eur'
];

function weight($fruits)
{
    foreach ($fruits as $rows) {
        if ($rows['weight'] > 10) {
            echo $rows['name'] . PHP_EOL;
        }
    }
}
weight($fruits);

    foreach ($fruits as $fruit) {
        if ($fruit['weight'] > 10) {
            echo "{$fruit['name']} shipping will cost {$shipping_cost['<=10kg']}" . PHP_EOL;
        } else {
            echo "{$fruit['name']} shipping will cost {$shipping_cost['>10kg']}" . PHP_EOL;
        }
}
