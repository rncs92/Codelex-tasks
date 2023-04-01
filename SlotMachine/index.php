<?php

$board = [
    ['', '', '', ''],
    ['', '', '', ''],
    ['', '', '', '']
];

$playerCash = 5000;
$rowLen = 3;
$colLen = 4;

function addGameElement(string $name, int $value): object
{
    $element = new stdClass;
    $element->name = $name;
    $element->value = $value;

    return $element;
}

$gameElements = [
    ' 10 ' => addGameElement('10', 100),
    '  J ' => addGameElement('J', 200),
    '  Q ' => addGameElement('Q', 300),
    '  K ' => addGameElement('K', 400),
    '  A ' => addGameElement('A', 500)
];

$value10 = $gameElements[' 10 ']->value;
$valueJ = $gameElements['  J ']->value;
$valueQ = $gameElements['  Q ']->value;
$valueK = $gameElements['  K ']->value;
$valueA = $gameElements['  A ']->value;

while (true) {

    $input = readline('Do you want to spin? Yes/No: ');

    if (strtolower($input) === 'no') {
        break;
    }

    echo PHP_EOL;
    $spinAmount = 50;
    $playerCash -= $spinAmount;

    for ($row = 0; $row < $rowLen; $row++) {
        for ($col = 0; $col < $colLen; $col++) {
            $board[$row][$col] = array_rand($gameElements);
        }
        echo implode('-', ($board[$row])) . PHP_EOL;
    }

    $winLines = [
        '1' => [$board[0][0], $board[0][1], $board[0][2], $board[0][3]],
        '2' => [$board[1][0], $board[1][1], $board[1][2], $board[1][3]],
        '3' => [$board[2][0], $board[2][1], $board[2][2], $board[2][3]],
        '4' => [$board[0][0], $board[1][1], $board[2][2], $board[2][3]],
        '5' => [$board[2][0], $board[1][1], $board[0][2], $board[0][3]],
        '6' => [$board[0][0], $board[0][1], $board[1][2], $board[2][3]],
        '7' => [$board[2][0], $board[2][1], $board[1][2], $board[0][3]],
        '8' => [$board[1][0], $board[0][1], $board[0][2], $board[1][3]],
        '9' => [$board[1][0], $board[2][1], $board[2][2], $board[1][3]],
        '10' => [$board[2][0], $board[1][1], $board[1][2], $board[2][3]],
        '11' => [$board[0][0], $board[1][1], $board[1][2], $board[0][3]],
        '12' => [$board[0][0], $board[0][1], $board[1][2], $board[1][3]],
        '13' => [$board[2][0], $board[2][1], $board[1][2], $board[1][3]]

    ];

    $lineValues = [];
    foreach ($winLines as $line) {
        $lineValues[] = $line;
    }

    foreach ($lineValues as $line) {
        if (count(array_unique($line)) === 1) {
            echo 'You won!' . PHP_EOL;
            if (in_array(' 10 ', $line) === true) {
                $playerCash += $value10;
            }
            if (in_array('  J ', $line) === true) {
                $playerCash += $valueJ;
            }
            if (in_array('  Q ', $line) === true) {
                $playerCash += $valueQ;
            }
            if (in_array('  K ', $line) === true) {
                $playerCash += $valueK;
            }
            if (in_array('  A ', $line) === true) {
                $playerCash += $valueA;
            }
        }
    }

    $cashDisplay = $playerCash / 100;
    $spinDisplay = $spinAmount / 100;
    echo PHP_EOL;
    echo "     Bet size: $spinDisplay eur" . PHP_EOL;
    echo "   Your balance: $cashDisplay eur" . PHP_EOL;

    if ($playerCash <= 0) {
        echo 'Insufficient funds!' . PHP_EOL;
        exit;
    }
}
