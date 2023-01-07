<?php

namespace App\Shop;

class Product
{
    private string $name; 
    private float $price; 
    private string $description; 


    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getPrice(): float
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
