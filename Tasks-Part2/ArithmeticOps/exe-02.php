<?php

function checkOddEven(int $number): void
{
    if ($number % 2 !== 0) {
        echo 'Odd Number' . PHP_EOL;
    } else {
        echo 'Even Number' . PHP_EOL;
    }
}

$number = -1;
$number2 = 4;

checkOddEven($number);
checkOddEven($number2);