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


while(true) {
    if(strpos($encrypted, '_') === false) {
        echo PHP_EOL . 'Congratulations! You guessed the right word!' . PHP_EOL;
        exit;
    }

    $userInput = readline('Type in chosen letter:');

    for ($i = 0; $i < count($answer); $i++) {
        if($answer[$i] == $userInput) {
            $guessedLetters[$i] = $userInput;
        }
    }

    $encrypted = implode('  ', $guessedLetters);
    echo $encrypted . PHP_EOL;
}

