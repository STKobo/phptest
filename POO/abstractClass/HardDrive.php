<?php 

require_once 'Product.php';

class HardDrive extends Product
{
    public int $capacity;
    public string $brand; 
    public function __construct(float $price, string $name, int $capacity, string $brand)
    {
        parent::__construct($price, $name);
        $this->capacity =$capacity;
        $this->brand = $brand;
    }
}

