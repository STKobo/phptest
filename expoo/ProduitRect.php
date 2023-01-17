<?php 
require_once 'Produit.php';

Class ProduitRect extends Produit 
{
    private int $width; 
    private int $height;

    public function __construct(string $name, float $price,int $width, int $height)
    {
        parent :: __construct($name, $price);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}