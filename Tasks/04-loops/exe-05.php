<?php

$persons = [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "birthday" => "12.04.1972"
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41,
            "birthday" => "15.05.1981"
        ],
        [
            "name" => "Janis",
            "surname" => "Skeps",
            "age" => 30,
            "birthday" => "28.06.1992"
        ]
];

foreach ($persons as $person) {
    echo "{$person['name']} {$person['surname']} {$person['age']} {$person['birthday']}" . PHP_EOL;
};