<?php declare(strict_types=1);

class Video
{
    private string $title;
    private bool $available;
    private array $rating;

    public function __construct(string $title, bool $available = true, array $rating = [])
    {
        $this->title = $title;
        $this->available = $available;
        $this->rating = $rating;
    }

    public function rent()
    {
        $this->available = false;
    }

    public function return()
    {
        $this->available = true;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function rate(int $rating): void
    {
        $this->rating[] = $rating;
    }

    public function rating(): float
    {
        if (empty($this->rating)) {
            return 0;
        }

        return array_sum($this->rating) / count($this->rating);
    }
}
