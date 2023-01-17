<?php 

Class Produit 
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    
    public function getName()
    {
        return $this->name;
    }

  
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }
}