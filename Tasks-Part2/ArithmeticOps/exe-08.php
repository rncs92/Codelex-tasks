<?php

function salaryCalculator(float $basePay, int $hoursWorked, int $baseHours = 40, int $maxHours = 60): string
{
    if ($basePay < 8) {
        return 'The base pay is too small!';
    }

    if ($hoursWorked > $maxHours) {
        return 'Work hours exceeded!';
    }

    if ($hoursWorked <= $baseHours) {
        $salary = $baseHours * $basePay;
    } else {
        $overtimeSalary = abs($baseHours - $hoursWorked) * ($basePay * 1.5);
        $salary = ($baseHours * $basePay) + $overtimeSalary;
    }

    return $salary;
}

$employeeOne = salaryCalculator(7.5, 35);
echo "Employee Nr.1: $employeeOne" . PHP_EOL;

$employeeTwo = salaryCalculator(8.20, 47);
echo "Employee Nr.2: {$employeeTwo}eur" . PHP_EOL;

$employeeThree = salaryCalculator(10, 73);
echo "Employee Nr.3: $employeeThree" . PHP_EOL;