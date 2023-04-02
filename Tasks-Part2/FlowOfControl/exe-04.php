<?php

$dayNumber = 6;
function day(int $day): void
{
    if ($day == 0) {
        echo 'Sunday' . PHP_EOL;
    } elseif ($day == 1) {
        echo 'Monday' . PHP_EOL;
    } elseif ($day == 2) {
        echo 'Tuesday' . PHP_EOL;
    } elseif ($day == 3) {
        echo 'Wednesday' . PHP_EOL;
    } elseif ($day == 4) {
        echo 'Thursday' . PHP_EOL;
    } elseif ($day == 5) {
        echo 'Friday' . PHP_EOL;
    } elseif ($day == 6) {
        echo 'Saturday' . PHP_EOL;
    } else {
        echo 'Not a valid day' . PHP_EOL;
    }
}

day($dayNumber);

switch ($dayNumber) {
    case 0:
        echo 'Sunday' . PHP_EOL;
        break;
    case 1:
        echo 'Monday' . PHP_EOL;
        break;
    case 2:
        echo 'Tuesday' . PHP_EOL;
        break;
    case 3:
        echo 'Wednesday' . PHP_EOL;
        break;
    case 4:
        echo 'Thursday' . PHP_EOL;
        break;
    case 5:
        echo 'Friday' . PHP_EOL;
        break;
    case 6:
        echo 'Saturday' . PHP_EOL;
        break;
    default:
        echo 'Not a valid day' . PHP_EOL;
}