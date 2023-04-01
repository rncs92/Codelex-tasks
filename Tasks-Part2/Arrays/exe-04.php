<?php

$first = [];
for ($i = 0; $i < 10; $i++) {
    $first[] = rand(1, 100);
}

$second = $first;

array_pop($first);
$first[] = -7;

var_dump($first);
var_dump($second);