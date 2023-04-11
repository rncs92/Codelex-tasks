<?php declare(strict_types=1);

/*
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
                    echo "Bye!" . PHP_EOL;
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

    }

    private function rent_video()
    {
        $rent = readline('Type in the title of video you want to rent: ');
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
*/

class VideoStore
{
    private array $videos;

    public function __construct(array $videos)
    {
        $this->videos = $videos;
    }

    public function addVideo(Video $video)
    {
        $this->videos[] = $video;
    }

    public function checkOut(Video $video)
    {
        $video->checkOut();
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

}


class Video
{
    private string $title;
    private bool $available = true;
    private float $rating;

    public function __construct(string $title, bool $available, float $rating)
    {
        $this->title = $title;
        $this->available = $available;
        $this->rating = $rating;
    }

    public function checkOut()
    {
        $this->available = false;
    }

    public function returned()
    {
        $this->available = true;
    }

    public function rate()
    {
        $rating = [];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}

class VideoStoreTest
{
    public static function run()
    {
        $videoStore = new Videostore([]);

        $video1 = new Video('The Matrix', true, 8.7);
        $video2 = new Video('The Godfather Part II', true, 9.0);
        $video3 = new Video('Star Wars Episode IV: A New Hope', true, 8.6);

        $videoStore->addVideo($video1);
        $videoStore->addVideo($video2);
        $videoStore->addVideo($video3);
        $videos = $videoStore->getVideos();

        foreach ($videos as $video) {
            echo "Title: {$video->getTitle()}" . PHP_EOL;
            echo 'Is available?: ' . ($video->isAvailable() ? 'Yes' : 'No') . PHP_EOL;
            echo "Rating: {$video->getRating()}" . PHP_EOL;
            echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
        }
    }
}


$myStore = new VideoStoreTest;
$myStore->run();

/*
$app = new Application();
$app->run();
*/