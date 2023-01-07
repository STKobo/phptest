<?php

namespace App\Shop;

class Product
{
    private int $id;
    private string $name; 
    private float $price; 
    private string $description; 

    public function __construct(
        string $name, 
        float $price, 
        string $description = 'Description par défaut' 
    ){
        $this->name = $name; 
        $this->price = $price; 
        $this->description = $description;
    }
    

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

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }
}
