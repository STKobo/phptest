<?php 

require_once 'Product.php';

class HardDrive extends Product
{
    private const TAX_ON_HARD_DRIVES = 20/100;
    public int $capacity;
    public string $brand; 
    public function __construct(float $price, string $name, int $capacity, string $brand)
    {
        parent::__construct($price, $name);
        $this->capacity =$capacity;
        $this->brand = $brand;
    }
    public function getTotalPrice(): float
    {
        return $this->price * (1 + self::TAX_ON_HARD_DRIVES);
    }
}

