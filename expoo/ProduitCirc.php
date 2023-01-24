<?php 

Class ProduitCirc extends Product
{
    private int $diameter;

    public function __construct(string $name, float $price,int $diameter)
    {
        parent :: __construct($name, $price);
        $this->diameter = $diameter;
    }

    /**
     * Get the value of diameter
     */ 
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Set the value of diameter
     *
     * @return  self
     */ 
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;

        return $this;
    }
}