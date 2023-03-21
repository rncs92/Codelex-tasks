<?php

$persons = [
    [
    'name' => 'Janis',
    'surname' => 'Skeps',
    'age' => 30
    ],
    [
        'name' => 'Aldis',
        'surname' => 'Ozols',
        'age' => 16
    ],
    [
        'name' => 'Maris',
        'surname' => 'Apse',
        'age' => 22
    ],
];

function grownUp($persons)
{
    foreach($persons as $person) {
        if($person['age'] > 18) {
            echo "{$person['name']} {$person['surname']} is grown up!" . PHP_EOL;
        }
    }
}
grownUp($persons);