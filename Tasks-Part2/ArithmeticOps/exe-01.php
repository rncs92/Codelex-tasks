<?php

$num1 = 30;
$num2 = 15;

function fifteen(int $num1, int $num2): bool
{
    if ($num1 == 15 || $num2 == 15) {
        return 'true';
    }

    if ($num1 + $num2 == 15) {
        return 'true';
    }

    if ($num1 - $num2 == 15) {
        return 'true';
    } else {
        return 'false';
    }
}

echo fifteen($num1, $num2);