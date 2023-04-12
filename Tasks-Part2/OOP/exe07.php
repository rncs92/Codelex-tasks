<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, Dog $mother = null, Dog $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }


    public function setMother(?Dog $mother): void
    {
        $this->mother = $mother;
    }

    public function fathersName(): string
    {
        if ($this->father == null) {
            return 'Unknown';
        }

        return $this->father->name;

    }

    public function setFather(?Dog $father): void
    {
        $this->father = $father;
    }

    public function HasSameMotherAs(Dog $name): string
    {
        if ($this->mother === $name->mother) {
            return 'true';
        } else {
            return 'false';
        }
    }
}

class DogTest
{
    public static function main(): void
    {
        $max = new Dog ('Max', 'male');
        $rocky = new Dog ('Rocky', 'male');
        $sparky = new Dog ('Sparky', 'male');
        $buster = new Dog ('Buster', 'male');
        $sam = new Dog ('Sam', 'male');
        $lady = new Dog ('Lady', 'female');
        $molly = new Dog ('Molly', 'female');
        $coco = new Dog ('Coco', 'female');


        $max->setMother($lady);
        $max->setFather($rocky);

        $coco->setMother($molly);
        $coco->setFather($buster);

        $rocky->setMother($molly);
        $rocky->setFather($sam);

        $buster->setMother($lady);
        $buster->setFather($sparky);

        echo $coco->fathersName() . PHP_EOL;
        echo $sparky->fathersName() . PHP_EOL;

        echo $coco->HasSameMotherAs($rocky) . PHP_EOL;
    }

}

DogTest::main();
