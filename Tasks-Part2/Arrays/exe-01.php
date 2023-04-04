<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
$modified = implode(', ', $numbers);
echo "Original numeric array: $modified" . PHP_EOL;


//todo
sort($numbers);
$sorted = implode(', ', $numbers);
echo "Sorted numeric array: $sorted" . PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];
$modified2 = implode(', ', $words);
echo "Original string array: $modified2" . PHP_EOL;

sort($words);
$sorted2 = implode(', ', $words);
echo "Sorted string array: $sorted2" . PHP_EOL;

