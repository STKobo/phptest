<?php 

namespace App\Shop; 

class ProductCirc extends Product 
{
    private int $diameter; 

    public function __construct(
        string $name,
        float $price, 
        string $description, 
        int $diameter
    )
    {
        parent::__construct($name, $price, $description);
        $this->diameter = $diameter;
    }
    
    public function getDiameter()
    {
        return $this->diameter;
    }


    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;

        return $this;
    }
}