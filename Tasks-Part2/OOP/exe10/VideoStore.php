<?php declare(strict_types=1);

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
