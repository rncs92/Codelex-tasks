<?php

function personBMI($weight, $height)
{
    $convertWeight = $weight * 2.20462;
    $convertHeight = $height * 0.393701;

    $bmi = $convertWeight * 703 / pow($convertHeight, 2);

    if ($bmi < 18.5) {
        return "Your BMI is $bmi. You are considered underweight." . PHP_EOL;
    }

    if ($bmi >= 18.5 && $bmi <= 25) {
        return "Your BMI is $bmi. You are considered optimal." . PHP_EOL;
    }

    if ($bmi > 25) {
        return "Your BMI is $bmi. You are considered overweight." . PHP_EOL;
    }

}

$myBMI = personBMI(94, 193);
echo $myBMI;