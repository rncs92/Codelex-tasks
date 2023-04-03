<?php

function salaryCalculator(float $basePay, int $hoursWorked)
{
    $baseHours = 40;

    if ($basePay < 8) {
        return 'The base pay is too small!';
    }

    if ($hoursWorked > 60) {
        return 'Work hours exceeded!';
    }

    if ($hoursWorked <= 40) {
        $salary = $baseHours * $basePay;
    } else {
        $regularHours = 40;
        $overtimeHours = abs($regularHours - $hoursWorked);
        $overtimeSalary = $overtimeHours * ($basePay * 1.5);
        $salary = ($regularHours * $basePay) + $overtimeSalary;
    }

    return $salary;
}

$employeeOne = salaryCalculator(7.5, 35);
echo "Employee Nr.1: $employeeOne" . PHP_EOL;

$employeeTwo = salaryCalculator(8.20, 47);
echo "Employee Nr.2: {$employeeTwo}eur" . PHP_EOL;

$employeeThree = salaryCalculator(10, 73);
echo "Employee Nr.3: $employeeThree" . PHP_EOL;