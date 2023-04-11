<?php declare(strict_types=1);

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
