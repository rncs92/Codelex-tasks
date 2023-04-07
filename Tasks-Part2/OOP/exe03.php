<?php declare(strict_types=1);

class FuelGauge
{
    private float $fuel;
    private int $tankSize;

    public function __construct(float $fuel, int $tankSize = 70)
    {

        $this->fuel = $fuel;
        $this->tankSize = $tankSize;
    }

    public function fillTank(float $addFuel): float
    {
        if ($this->tankSize < $this->fuel + $addFuel) {
            echo 'Your gas tank dont have enough space.' . PHP_EOL;
        }

        $this->fuel += $addFuel;
        return $this->fuel;
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }

    public function burnFuel(): float
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
    private float $maxMileage;

    public function __construct(float $mileage, float $maxMileage = 999999)
    {

        $this->mileage = $mileage;
        $this->maxMileage = $maxMileage;
    }

    public function getMileage(): float
    {
        return $this->mileage;
    }

    public function setMileage(): void
    {
        $this->mileage = 0;
    }

    public function drive(): ?float
    {

        if ($this->mileage >= $this->maxMileage) {
            $this->mileage = 0;
        } else {
            $this->mileage++;
        }

        return $this->mileage;
    }

}

$car1 = new FuelGauge(1.23);
$car1->fillTank(3.17);
$car1->burnFuel();
$car1->burnFuel();
$car1->burnFuel();
$car1->burnFuel();

$car2 = new Odometer(999997);
$car2->drive();


var_dump($car2);