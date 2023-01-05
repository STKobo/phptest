<?php 

class Seller 
{
    public string $name ; 
    public string $surname; 
    public string $company; 

    public function __construct(string $name, string $surname, string $company)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->company = $company;
    }

    public function getDisplayedName(): string 
    {
        return $this->name.' '.$this->surname; 
    }
}