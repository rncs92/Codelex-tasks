<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

$average = array_sum($numbers) / count($numbers);
echo $average . PHP_EOL;

$rounded = round($average);
echo $rounded . PHP_EOL;

