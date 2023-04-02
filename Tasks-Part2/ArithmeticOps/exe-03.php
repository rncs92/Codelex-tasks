<?php

$lower = 1;
$upper = 100;

$number = range($lower, $upper);
$sumNumber = array_sum($number);
$average = $sumNumber / count($number);

echo "The sum of $lower to $upper is $sumNumber" . PHP_EOL;
echo "The average is $average" . PHP_EOL;