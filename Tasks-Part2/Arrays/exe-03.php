<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: 1472" . PHP_EOL;

$search = 1472;

if (in_array($search, $numbers)) {
    echo "There is $search number in array!" . PHP_EOL;
} else {
    echo "There is no $search number in array!" . PHP_EOL;
}