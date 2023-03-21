<?php

$mix = [1, 5, 7, 9.9, 'two'];

$count = 0;
for ($i = 1; $i <= count($mix); $i++) {
     print_r($count++);
}

echo "\n" . $count . "\n";
function doubleInteger($mix)
{
    foreach ($mix as $number) {
        if(is_int($number)) {
            echo $number * 2 . PHP_EOL;
        }
    }
}
 doubleInteger($mix);
