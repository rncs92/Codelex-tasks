<?php

$guessNumber = rand(1, 100);
$userGuess = readline('Try to guess number between 1 - 100: ');


if ($guessNumber == $userGuess) {
    echo 'That`s the right number! How did you do it??' . PHP_EOL;
    exit;
}

if ($guessNumber > $userGuess) {
    echo "Sorry you are too low. The number is $guessNumber." . PHP_EOL;
}

if ($guessNumber < $userGuess) {
    echo "Sorry you are too high. The number is $guessNumber." . PHP_EOL;
}


