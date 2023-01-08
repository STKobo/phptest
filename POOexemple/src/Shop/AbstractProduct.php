<?php

namespace App\Shop;

use App\IDisplayable;

abstract class AbstractProduct implements IDisplayable
{
    protected int $id;
    protected string $name; 
    protected float $price; 
    protected string $description; 

    public function __construct(
        string $name, 
        float $price, 
        string $description = 'Description par défaut' 
    ){
        $this->name = $name; 
        $this->price = $price; 
        $this->description = $description;
    }
    
    abstract public function getSurface(): float; 
    // toute classe qui prétend hériter de cette classe abstraite devra alors fournir une implémentation de la classe abstraite

    public function display(): void
    {
        echo $this->getName(). ' - '.$this->getSurface()."<br />";
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
