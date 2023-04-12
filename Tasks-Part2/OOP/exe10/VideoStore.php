<?php declare(strict_types=1);

class VideoStore
{
    private array $videos;

    public function __construct(array $videos)
    {
        $this->videos = $videos;
    }

    public function addMovie(string $title): void
    {
        $this->videos[] = new Video($title);
    }

    public function checkOut(int $rent): void
    {
        foreach ($this->getVideos() as $key => $video) {
            /** @var Video $video */
            if (!$video->isAvailable() && $rent == $key) {
                echo 'This movie is not available.' . PHP_EOL;
            }

            if ($video->isAvailable() && $rent == $key) {
                $video->rent();
                echo 'Movie rented!' . PHP_EOL;
            }
        }
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function rate(int $movieID, int $userRating): void
    {
        foreach ($this->getVideos() as $key => $video) {
            /** @var Video $video */
            if ($key == $movieID) {
                $video->rate($userRating);
            }
        }
    }

    public function checkIn(int $return): void
    {
        foreach ($this->getVideos() as $key => $video) {
            /** @var Video $video */
            if (!$video->isAvailable() && $key == $return) {
                $video->return();
                echo 'Movie returned!' . PHP_EOL;
            }

            if ($video->isAvailable() && $key == $return) {
                echo 'You have not rented this movie!' . PHP_EOL;
            }
        }
    }

    public function echoAll(): void
    {
        foreach ($this->getVideos() as $key => $video) {
            /** @var Video $video */
            echo "ID:[$key] ";
            echo "Title: {$video->getTitle()}" . PHP_EOL;
            echo 'Is available?: ' . ($video->isAvailable() ? 'Yes' : 'No') . PHP_EOL;
            echo "Rating: {$video->rating()}" . PHP_EOL;
            echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
        }
    }
}
