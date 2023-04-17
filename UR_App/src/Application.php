<?php

namespace App;

use Carbon\Carbon;

class Application
{
    private Registry $registry;

    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    public function run(): void
    {
        while (true) {
            echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
            echo " Esiet sveicināti Latvijas Republikas Uzņēmumu reģistrā." . PHP_EOL;
            echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
            echo "Ievadiet 1: Pieejamo uzņēmumu saraksts" . PHP_EOL;
            echo "Ievadiet 2: Aktīvi darbojošies uzņēmumi" . PHP_EOL;
            echo "Ievadiet 3: Likvidēto uzņēmumu saraksts" . PHP_EOL;
            echo "Ievadiet 4: Iegūt informāciju par uzņēmumu pēc ReģNr." . PHP_EOL;
            echo "Ievadiet 0: Iziet" . PHP_EOL;
            echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;

            $command = (int)readline();
            if ($command == 0) {
                echo 'Visu labu!' . PHP_EOL;
                die;
            }
            switch ($command) {
                case 1:
                    $this->list();
                    break;
                case 2:
                    $this->active();
                    break;
                case 3:
                    $this->terminated();
                    break;
                case 4:
                    $this->search();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function list(): void
    {
        foreach ($this->registry->getBusinesses() as $business) {
            echo $business->name . PHP_EOL;
            echo 'ReģNr: ' . $business->regcode . PHP_EOL;
            echo '..............................................' . PHP_EOL;
        }
    }

    private function active(): void
    {
        foreach ($this->registry->getBusinesses() as $business) {
            if ($business->terminated == null) {
                echo $business->name . PHP_EOL;
                echo 'Dibināts: ' . Carbon::parse($business->registered)->isoFormat('LLLL') . PHP_EOL;
                echo 'ReģNr: ' . $business->regcode . PHP_EOL;
                echo '..............................................' . PHP_EOL;
            }
        }
    }

    private function terminated(): void
    {
        foreach ($this->registry->getBusinesses() as $business) {
            if ($business->terminated !== null) {
                echo $business->name . PHP_EOL;
                echo 'ReģNr: ' . $business->regcode . PHP_EOL;
                echo 'Likvidēts: ' . Carbon::parse($business->terminated)->isoFormat('LLLL') . PHP_EOL;
                echo '..............................................' . PHP_EOL;
            }
        }
    }

    private function search(): void
    {
        $regCode = readline('Ievadiet uzņēmuma ReģNr: ');
        foreach ($this->registry->getBusinesses() as $business) {
            if ($regCode == $business->regcode) {
                echo '..............................................' . PHP_EOL;
                echo $business->name . PHP_EOL;
                echo 'ReģNr: ' . $business->regcode . PHP_EOL;
                echo 'Tips: ' . $business->type . PHP_EOL;
                echo 'Dibināts: ' . Carbon::parse($business->registered)->isoFormat('LLLL') . PHP_EOL;
                if ($business->terminated == null) {
                    echo 'Likdivēts: Aktīvs' . PHP_EOL;
                } else {
                    echo 'Likvidēts: ' . Carbon::parse($business->terminated)->isoFormat('LLLL') . PHP_EOL;
                }
                echo 'Adrese: ' . $business->address . PHP_EOL;
                echo '..............................................' . PHP_EOL;
            }
        }
    }
}