<?php declare(strict_types=1);

include_once 'Application.php';
include_once 'Video.php';
include_once 'VideoStore.php';

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