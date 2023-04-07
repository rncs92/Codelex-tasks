<?php declare(strict_types=1);

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {

        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public static function GetPG(array $movies): array
    {
        $moviesPG = [];
        foreach ($movies as $movie) {
            if ($movie->rating == 'PG') {
                $moviesPG[] = $movie;
            }
        }
        return $moviesPG;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

}

$movies = [
    new Movie ('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie ('Glass', 'Buena Vista International', 'PG13'),
    new Movie ('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG')
];

$moviesPG = Movie::GetPG($movies);


echo "Movies with 'PG' rating: " . PHP_EOL;
foreach ($moviesPG as $movie) {
    echo "{$movie->getTitle()}, {$movie->getStudio()}, {$movie->getRating()}." . PHP_EOL;
}
