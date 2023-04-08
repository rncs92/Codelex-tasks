<?php declare(strict_types=1);

class FuelGauge
{
    private float $fuel;

    public function __construct(float $fuel)
    {
        $this->fuel = $fuel;
    }

    public function fill(float $addFuel, int $tankSize = 70): float
    {
        if ($tankSize < $this->fuel + $addFuel) {
            echo 'Your gas tank dont have enough space.' . PHP_EOL;
        }

        $this->fuel += $addFuel;
        return $this->fuel;
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }

    public function burn(): float
    {
        if ($this->fuel > 0) {
            $this->fuel--;
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

    public function accumulate(int $consumption, float $maxMileage = 999999): ?float
    {

        if ($this->mileage >= $maxMileage) {
            $this->mileage = 0;
        } else {
            $this->mileage += $consumption;
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
        $fuel = $this->fuel;
        $mileage = $this->mileage;

        while (true) {
            $mileage->accumulate(10);
            echo "Cars current mileage: {$mileage->getMileage()}" . PHP_EOL;
            $fuel->burn();
            echo "Fuel let: {$fuel->getFuel()}" . PHP_EOL;

            if ($fuel->getFuel() < 1) {
                echo "You are running low on fuel!" . PHP_EOL;
                break;
            }
        }
    }
}


$fuel = new FuelGauge(15.32);
$fuel->fill(13.33);
$mileage = new Odometer(394500);

$car = new Car($fuel, $mileage);
$car->drive();
