<?php 

require_once 'user.php';
class Seller extends User 
{
    public string $company;

    public function __construct(string $name, string $surname, string $company)
    {
        $this->name = $name; 
        $this->surname = $surname; 
        $this->company = $company;
    }
}