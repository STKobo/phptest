<?php 

namespace App\Shop; 

final class ProductCirc extends AbstractProduct 
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

    public function getSurface(): float
    {
        return M_PI * (($this->diameter / 2) ** 2);
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