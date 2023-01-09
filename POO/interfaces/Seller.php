<?php

require_once 'User.php';

class Seller extends User 
{
    public Company $company;
    public function __construct(string $name, string $surname, Company $company)
    {
        parent::__construct($name, $surname);
        $this->company = $company;
    }
}