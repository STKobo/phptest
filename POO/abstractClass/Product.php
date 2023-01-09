<?php 

abstract class Product 
{
    public float $price; 
    public string $name; 
    public function __construct(float $price, string $name)
    {
        $this->price = $price;
        $this->name = $name; 
    }

}