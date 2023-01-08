<?php 

namespace App\Shop; 

final class ProductRect extends Product
{
    private int $width; 
    private int $height;

    public function __construct(
        string $name, 
        float $price, 
        int $width, 
        int $height, 
        ?string $description = null
    )  {
        if ($description === null){
            parent::__construct($name, $price);
        } else {
            parent::__construct($name, $price, $description);
        }

        $this->width = $width;
        $this->height = $height; 
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }


    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}