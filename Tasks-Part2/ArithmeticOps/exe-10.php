<?php

$calculators = [
    '(1)' => 'Calculate the Area of a Circle',
    '(2)' => 'Calculate the Area of a Rectangle',
    '(3)' => 'Calculate the Area of a Triangle',
    '(4)' => 'Quit'
];

echo 'Geometry calculator: ' . PHP_EOL;

foreach ($calculators as $key => $calculator) {
    echo "$key: ";
    echo $calculator . PHP_EOL;
}

$selection = readline('Enter your choice (1-4): ');

if (!in_array($selection, [1, 2, 3, 4])) {
    echo 'Invalid selection!' . PHP_EOL;
}

if ($selection == 1) {
    $radius = readline('Enter circle radius: ');
    echo 'Area of your circle is ' . circleArea($radius) . PHP_EOL;
}

if ($selection == 2) {
    $length = readline('Enter rectangle length: ');
    $width = readline('Enter rectangle length: ');
    echo 'Area of your rectangle is ' . rectangleArea($length, $width) . PHP_EOL;
}

if ($selection == 3) {
    $base = readline('Enter triangle base: ');
    $height = readline('Enter triangle height: ');
    echo 'Area of your triangle is ' . triangleArea($base, $height) . PHP_EOL;
}

if ($selection == 4) {
    echo 'Bye Bye!' . PHP_EOL;
}

function circleArea(float $radius): float
{
    if ($radius < 0) {
        return 'You cant use negative radius.';
    } else {
        return M_PI * $radius * 2;
    }
}

function rectangleArea(float $length, float $width): float
{
    if ($length < 0 || $width < 0) {
        return 'You cant use negative length or width.';
    } else {
        return $length * $width;
    }
}

function triangleArea(float $base, float $height): float
{
    if ($base < 0 || $height < 0) {
        return 'You cant use negative base or height.';
    } else {
        return $base * $height * 0.5;
    }
}