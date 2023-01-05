<?php 

require_once 'Car.php';

class GasolineCar extends Car 
{
    public float $co2Emission; 
    public function __construct(float $price, string $brand, float $co2Emission)
    {
        $this->price = $price; 
        $this->brand = $brand;
        $this->co2Emission = $co2Emission;  
    }
}