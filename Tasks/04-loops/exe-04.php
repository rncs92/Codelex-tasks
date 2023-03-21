<?php

$numbers = [1, 3, 5, 7, 9, 12, 14, 15];

foreach ($numbers as $number) {
    if ($number % 3 === 0) {
        echo $number . PHP_EOL;
    }
}