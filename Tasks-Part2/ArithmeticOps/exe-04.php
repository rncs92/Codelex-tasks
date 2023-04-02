<?php

$lower = 1;
$upper = 10;

$numbers = range($lower, $upper);
$product = array_product($numbers);

echo "The product of $lower to $upper is $product" . PHP_EOL;