<?php

echo "Welcome to TicTacToe Game!" . PHP_EOL;
echo PHP_EOL;

$field = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];
function makeField(array $field) {
    for ($row = 0; $row < 3; $row++) {
        for ($column = 0; $column < 3; $column++) {
            echo "| {$field[$row][$column]} |";
        }
        echo "\n";
    }
}

function checkWinner(array $field, $symbol): bool
{
    for ($row = 0; $row < 3; $row++) {
        if ($field[$row][0] == $field[$row][1] && $field[$row][1] == $field[$row][2]) {
            if ($field[$row][1] == $symbol) {
                return true;
            }
        }
    }

    for ($column = 0; $column < 3; $column++) {
        if ($field[0][$column] == $field[1][$column] && $field[1][$column] == $field[2][$column]) {
            if ($field[0][$column] == $symbol) {
                return true;
            }
        }
    }

    if($field[0][0] == $field[1][1] && $field[1][1] == $field[2][2]) {
        if ($field[0][0] == $symbol) {
            return true;
        }
    }

    if($field[0][2] == $field[1][1] && $field[1][1] == $field[2][0]) {
        if($field[0][2] == $symbol) {
            return true;
        }
    }
    return false;
}

$players = ['X', 'O'];
$currentPlayer = 0;
$currentMove = 0;

while(true)
{
    $symbol = $players[$currentPlayer];
    echo 'Player ' . $symbol . ' it`s your turn' . PHP_EOL;
    $row = readline('Choose your row cell(0 - 2): ');
    $column = readline('Choose your column cell(0 - 2): ');
    if($field[$row][$column] != '') {
        echo 'That cell is occupied' . PHP_EOL;
        continue;
    }

    $field[$row][$column] = $symbol;
    makeField($field);
    $currentMove++;

    if(CheckWinner($field, $symbol)) {
        echo "Player $symbol wins!" . PHP_EOL;
        break;
    }

    if($currentMove == 9) {
        echo 'It`s a tie!';
        break;
    }

    $currentPlayer = ($currentPlayer + 1) % 2;
}




