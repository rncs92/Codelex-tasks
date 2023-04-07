<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }

    public function setMother()
    {
        
    }
}

class DogTest
{
    private array $dogs = [];

    public function main(): void
    {
        $this->dogs = [
            new Dog ('Max', 'male'),
            new Dog ('Rocky', 'male'),
            new Dog ('Sparky', 'male'),
            new Dog ('Buster', 'male'),
            new Dog ('Sam', 'male'),
            new Dog ('Lady', 'female'),
            new Dog ('Molly', 'female'),
            new Dog ('Coco', 'female')
        ];
    }
}
