<?php declare(strict_types=1);

class Application
{
    private VideoStore $videoStore;

    public function __construct(VideoStore $videoStore)
    {
        $this->videoStore = $videoStore;
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to rate video (as user)\n";
            echo "Choose 4 to return video (as user)\n";
            echo "Choose 5 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!" . PHP_EOL;
                    die;
                case 1:
                    $this->add();
                    break;
                case 2:
                    $this->rent();
                    break;
                case 3:
                    $this->rate();
                    break;
                case 4:
                    $this->return();
                    break;
                case 5:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add(): void
    {
        $video = readline('Add title of the movie you want to add: ');
        $this->videoStore->addMovie($video);
        echo 'Thank you, movie added!' . PHP_EOL;
    }

    private function rent(): void
    {
        $this->videoStore->echoAll();

        $rent = (int)readline('Type in the ID of video you want to rent: ');

        $this->videoStore->checkOut($rent);

    }

    private function rate(): void
    {
        $this->videoStore->echoAll();

        $movieID = (int)readline('Please choose movie ID, that you want to rate: ');
        if (!array_key_exists($movieID, $this->videoStore->getVideos())) {
            echo 'Wrong ID entered.' . PHP_EOL;
            return;
        }

        $userRating = (int)readline('Please add your rating: ');
        $this->videoStore->rate($movieID, $userRating);

        echo 'Thank you, rating added!' . PHP_EOL;
    }

    private function return()
    {
        $this->videoStore->echoAll();
        $movieID = (int)readline('Enter the ID of the movie you want to return: ');
        $this->videoStore->checkIn($movieID);
    }

    private function listInventory(): void
    {
        $this->videoStore->echoAll();
    }
}
