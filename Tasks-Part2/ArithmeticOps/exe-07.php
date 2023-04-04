<?php

function gravity(float $acceleration, int $time, int $velocity, int $position): float
{
    return 0.5 * ($acceleration * pow($time, 2)) + ($velocity * $time) + $position;
}

$acceleration = -9.81;
$time = 10;
$velocity = 0;
$position = 0;

$result = gravity($acceleration, $time, $velocity, $position);
echo "Answer is: {$result}m" . PHP_EOL;
