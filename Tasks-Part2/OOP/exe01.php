<?php declare(strict_types=1);

class Product
{

    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $newPrice): void
    {
        $this->price = $newPrice;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $newAmount): void
    {
        $this->amount = $newAmount;
    }

}

$products = [
    new Product ('Logitech mouse', 70.00, 14),
    new Product ('iPhone 5s', 999.99, 3),
    new Product ('Epson EB-U05', 440.46, 1)

];

function printProduct(array $products): void
{
    foreach ($products as $product) {
        echo "{$product->getName()}, price {$product->getPrice()} EUR, amount {$product->getAmount()}" . PHP_EOL;
    }
}

printProduct($products);

echo PHP_EOL;

$products[0]->setPrice(53.33);
$products[0]->setAmount(7);

$products[2]->setPrice(332.33);
$products[2]->setAmount(4);

printProduct($products);