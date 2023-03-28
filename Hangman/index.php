<?php

echo "Welcome! Let`s play the Hangman game!" . PHP_EOL;
echo PHP_EOL;

$words = [
    'elephant',
    'programming',
    'sunshine',
    'horizontal',
    'success',
    'completed'
];

$random = array_rand($words);
$answer = str_split($words[$random]);

echo "Word to guess:" . PHP_EOL;

$guessedLetters = [];
foreach($answer as $letter) {
    $guessedLetters[] = '_';
}
$encrypted = implode('  ', $guessedLetters);

echo $encrypted . PHP_EOL;

$lives = 3;
while(true) {
    if(strpos($encrypted, '_') === false) {
        echo PHP_EOL . 'Congratulations! You guessed the right word!' . PHP_EOL;
        exit;
    }

    $userInput = readline('Type in chosen letter:');

    $strAnswer = strtoupper(implode('', $answer));

    if (!in_array($userInput, $answer)) {
        $lives--;
        echo "Incorrect letter! You have $lives lives left." . PHP_EOL;
        if ($lives === 0) {
            echo "Game over! You have run out of lives." . PHP_EOL;
            echo "Right answer was - $strAnswer!". PHP_EOL;
            exit;
        }
    }

    for ($i = 0; $i < count($answer); $i++) {
        if ($answer[$i] == $userInput) {
            $guessedLetters[$i] = $userInput;
        }
    }

    $encrypted = implode('  ', $guessedLetters);
    echo $encrypted . PHP_EOL;
}

