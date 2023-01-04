<?php 

class Moto 
{
    public string $brand;
    public string $color;
    public float $maxSpeed;

    public function getDescription(): string 
    {
        return $this->brand.' '.$this->color.' ayant une vitesse maximale de '.$this->maxSpeed.'km/h'.PHP_EOL;
    }
}