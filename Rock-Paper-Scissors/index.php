<?php

echo "Let`s play the game - Rock, Paper, Scissors, with Lizard & Spock expansion!" . PHP_EOL;

$choice= readline('Players selection: ');
$playersChoice = strtolower($choice);

function gameElement(string $name, $strongerThan): object
{
    $element = new stdClass;
    $element->name = $name;
    $element->strongerThan = $strongerThan;

    return $element;
}

$elements = [
    'paper' => gameElement('paper', ['rock', 'spock']),
    'rock' => gameElement('rock', ['lizard', 'scissors']),
    'scissors' => gameElement('scissors', ['paper', 'lizard']),
    'lizard' => gameElement('lizard', ['spock', 'paper']),
    'spock' => gameElement('spock', ['rock', 'scissors'])
];

function getComputerChoice(): string
{
    switch (rand(1, 5)) {
        case 1:
            return 'Paper';

        case 2:
            return 'Rock';

        case 3:
            return 'Scissors';

        case 4:
            return 'Lizard';

        case 5:
            return 'Spock';
    }
}

$computersChoice = getComputerChoice();

echo "Computers selection: $computersChoice" . PHP_EOL;

$elementChoice = $elements[$playersChoice];
$compInput = strtolower($computersChoice);

if(!array_key_exists($playersChoice, $elements)) {
    echo 'Not a valid choice!' . PHP_EOL;
    exit;
}

if($playersChoice === $compInput) {
    echo 'That is a tie!' . PHP_EOL;
    exit;
}

if (in_array($compInput, $elementChoice->strongerThan)) {
    echo 'Player wins!' . PHP_EOL;
} else {
    echo 'Computer wins!' . PHP_EOL;
}
