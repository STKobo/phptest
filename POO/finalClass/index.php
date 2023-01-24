<?php
abstract class Product
{
    private string $name;
    private float $price;
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public abstract function formatPrice(): string;
}
class EUProduct extends Product
{
    public function formatPrice(): string
    {
        return $this->getPrice().' €';
    }
}
class USProduct extends Product
{
    public function formatPrice(): string
    {
        return '$'.$this->getPrice();
    }
}
$hardDrive = new EUProduct('Disque dur', 140.00);
$UShardDrive = new USProduct('Hard Drive', 140.00);
echo $hardDrive->formatPrice(); // Affiche 140.00 €
echo '<br>';
echo $UShardDrive->formatPrice(); // Affiche $140.00