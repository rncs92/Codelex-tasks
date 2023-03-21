<?php

$person = [
    'name' => 'Janis',
    'surname' => 'Skeps',
    'age' => 30
];

function grownUp($person)
{
    if ($person['age'] > 18) {
        return "{$person['name']} {$person['surname']}, has reached 18 years.";
    } else {
        return "{$person['name']} {$person['surname']}, has not reached 18 years.";
    }
}

var_dump(grownUp($person));