<?php declare(strict_types=1);

namespace Weather;
class Application
{

    private Cast $weather;

    public function __construct(Cast $weather)
    {
        $this->weather = $weather;
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to get the weather\n";
            echo "Choose 2 to get the temperatures\n";
            echo "Choose 3 to get the humidity level\n";
            echo "Choose 4 to get the wind info\n";
            echo "Choose 5 to get the city coordinates\n";


            $command = (int)readline();
            $city = readline('Enter the city: ');

            switch ($command) {
                case 0:
                    echo "Bye!" . PHP_EOL;
                    die;
                case 1:
                    $this->weather($city);
                    break;
                case 2:
                    $this->temperatures($city);
                    break;
                case 3:
                    $this->humidity($city);
                    break;
                case 4:
                    $this->wind($city);
                    break;
                case 5:
                    $this->coord($city);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function weather($city): void
    {
        $weather = $this->weather->getAPI($city);
        $displayVisibility = $weather->visibility / 1000;
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        echo "Weather in $weather->name: " . $weather->weather[0]->main . PHP_EOL;
        echo 'Clouds: ' . $weather->clouds->all . '%' . PHP_EOL;
        echo 'Visibility: ' . $displayVisibility . 'km' . PHP_EOL;
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
    }

    private function temperatures($city): void
    {
        $weather = $this->weather->getAPI($city);
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        echo "Temperature in $weather->name: " . $weather->main->temp . 'C' . PHP_EOL;
        echo 'Fells like: ' . $weather->main->feels_like . 'C' . PHP_EOL;
        echo 'Max temp: ' . $weather->main->temp_max . 'C' . PHP_EOL;
        echo 'Min temp: ' . $weather->main->temp_min . 'C' . PHP_EOL;
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
    }

    private function humidity($city): void
    {
        $weather = $this->weather->getAPI($city);
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        echo "Humidity in $weather->name: {$weather->main->humidity}%" . PHP_EOL;
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
    }

    private function wind($city)
    {
        $weather = $this->weather->getAPI($city);
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        echo "Wind speed in $weather->name: " . $weather->wind->speed . 'km/h' . PHP_EOL;

        if ($weather->wind->deg >= 15 && $weather->wind->deg <= 75) {
            echo "Wind direction North-East" . PHP_EOL;
        }
        if ($weather->wind->deg >= 76 && $weather->wind->deg <= 105) {
            echo "Wind direction East" . PHP_EOL;
        }
        if ($weather->wind->deg >= 106 && $weather->wind->deg <= 175) {
            echo "Wind direction South-East" . PHP_EOL;
        }
        if ($weather->wind->deg >= 176 && $weather->wind->deg <= 225) {
            echo "Wind direction South-West" . PHP_EOL;
        }
        if ($weather->wind->deg >= 256 && $weather->wind->deg <= 285) {
            echo "Wind direction West" . PHP_EOL;
        }
        if ($weather->wind->deg >= 286 && $weather->wind->deg <= 345) {
            echo "Wind direction North-West" . PHP_EOL;
        }
        if ($weather->wind->deg >= 346 || $weather->wind->deg <= 15) {
            echo "Wind direction North" . PHP_EOL;
        }
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
    }

    private function coord($city): void
    {
        $weather = $this->weather->getAPI($city);
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        echo "$weather->name coordinates:" . PHP_EOL;
        echo "Longitude: {$weather->coord->lon}" . PHP_EOL;
        echo "Latitude: {$weather->coord->lat}" . PHP_EOL;
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
    }
}
