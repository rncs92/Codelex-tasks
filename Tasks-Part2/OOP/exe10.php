<?php declare(strict_types=1);

class Application
{
    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        //todo
    }

    private function rent_video()
    {
        //todo
    }

    private function return_video()
    {
        //todo
    }

    private function list_inventory()
    {
        //todo
    }
}

class VideoStore
{
    public function __construct()
    {
    }
}

class Video
{
    private string $title;
    private bool $available;
    private float $rating;

    public function __construct(string $title, bool $available, float $rating)
    {
        $this->title = $title;
        $this->available = $available;
        $this->rating = $rating;
    }

    public function checkOut()
    {

    }

    public function returned()
    {

    }

    public function rate()
    {

    }
}

$app = new Application();
$app->run();
