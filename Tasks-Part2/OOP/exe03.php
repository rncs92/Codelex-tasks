<?php declare(strict_types=1);

class FuelGauge
{
    private float $fuel;
    private int $tankSize;

    public function __construct(int $fuel, int $tankSize)
    {

        $this->fuel = $fuel;
        $this->tankSize = $tankSize;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function getTankSize(): int
    {
        return $this->tankSize;
    }

    public function fillTank(int $fuel, int $tankSize): int
    {
        for ($fuel = 0; $fuel <= $tankSize; $fuel++) {
            if ($fuel < $tankSize) {
                $fuel++;
            }
        }
        return $fuel;
    }

    public function burnFuel(int $fuel, int $tankSize): int
    {
        if ($fuel > 0) {
            for ($fuel = 70; $fuel <= $tankSize; $fuel++) {
                if ($fuel < $tankSize) {
                    $fuel--;
                }
            }
        }
        return $fuel;
    }
}

class Odometer
{
    private float $mileage;
    private float $maxMileage;

    public function __construct(float $mileage, float $maxMileage)
    {

        $this->mileage = $mileage;
        $this->maxMileage = $maxMileage;
    }

    public function getMileage(): float
    {
        return $this->mileage;
    }

    public function getMaxMileage(): float
    {
        return $this->maxMileage;
    }

}
