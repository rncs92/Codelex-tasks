<?php declare(strict_types=1);

class FuelGauge
{
    private float $fuel;

    public function __construct(float $fuel = 0)
    {
        $this->fuel = $fuel;
    }

    public function fill(float $addFuel, int $tankSize = 70): float
    {
        if ($tankSize < $this->fuel + $addFuel) {
            echo 'Your gas tank dont have enough space.' . PHP_EOL;
            exit;
        }

        $this->fuel += $addFuel;
        return $this->fuel;
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }

    public function burn($consumption): float
    {
        if ($this->fuel > 0) {
            $this->fuel -= $consumption;
        }

        if ($this->fuel <= 0) {
            echo 'You have ran out of fuel!' . PHP_EOL;
        }
        return $this->fuel;
    }
}

class Odometer
{
    private float $mileage;

    public function __construct(float $mileage)
    {
        $this->mileage = $mileage;;
    }

    public function getMileage(): float
    {
        return $this->mileage;
    }

    public function accumulate(int $distance, float $maxMileage = 999999): ?float
    {

        if ($this->mileage >= $maxMileage) {
            $this->mileage = 0;
        } else {
            $this->mileage += $distance;
        }

        return $this->mileage;
    }
}

class Car
{
    private FuelGauge $fuel;
    private Odometer $mileage;

    public function __construct(FuelGauge $fuel, Odometer $mileage)
    {
        $this->fuel = $fuel;
        $this->mileage = $mileage;
    }

    public function drive()
    {
        $model = readline('What is the model of your car? ');
        while ($this->fuel->getFuel() > 0) {

            $this->mileage->accumulate(1);
            echo "$model current mileage: {$this->mileage->getMileage()} miles" . PHP_EOL;
            $this->fuel->burn(0.1);
            echo "Fuel let: {$this->fuel->getFuel()} liters" . PHP_EOL;
            sleep(1);
        }
    }
}


$fuel = new FuelGauge(15.32);
$fuel->fill(13.33);
$mileage = new Odometer(394500);

$car = new Car($fuel, $mileage);

$car->drive();
