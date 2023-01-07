<?php 

namespace App\Shop; 

class ProductCirc extends Product 
{
    private int $diameter; 
    
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