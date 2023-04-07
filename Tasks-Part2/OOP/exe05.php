<?php declare(strict_types=1);

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month): void
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function DisplayDate(): string
    {
        return "$this->month / $this->day / $this->year";
    }
}

$date = new Date(05, 07, 2023);
$date2 = new Date(06, 28, 1992);

echo $date->DisplayDate() . PHP_EOL;
echo $date2->DisplayDate() . PHP_EOL;

class DateTest
{
    public static function run(): void
    {
        $date = new Date (06, 28, 1992);

        echo 'Unmodified date: ';
        echo $date->DisplayDate() . PHP_EOL;

        $date->setYear(2023);
        $date->setMonth(11);

        echo 'Modified date: ';
        echo $date->DisplayDate() . PHP_EOL;

    }
}

DateTest::run();