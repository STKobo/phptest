<?php
require_once 'User.php';

class Seller extends User
{
    public string $company; 
    public function __construct(string $name, string $surname, string $company)
    {
        $this->name = $name;
        $this->surname = $surname; 
        $this->company = $company; 
    }

    public function getDisplayedName(): string 
    {
        return $this->name.' '.$this->surname.' ('.$this->company.') ';
    }
}