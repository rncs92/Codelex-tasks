<?php

$text = readline('Type in your string: ');
$string = strtoupper($text);

$str = ["2", "22", "222", "3", "33", "333",
    "4", "44", "444", "5", "55", "555",
    "6", "66", "666", "7", "77", "777", "7777",
    "8", "88", "888", "9", "99", "999", "9999"];

function phoneKeyPad(string $string, array $str): string
{
    $output = "";

    $n = strlen($string);
    for ($i = 0; $i < $n; $i++) {
        if ($string[$i] == ' ')
            $output = $output . "0";

        else {
            $position = ord($string[$i]) - ord('A');
            $output = $output . $str[$position];
        }
    }

    return $output;
}

echo phoneKeyPad($string, $str);
echo PHP_EOL;
