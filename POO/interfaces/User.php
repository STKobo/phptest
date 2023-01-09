<?php 
require_once 'Tooltipable.php';

class User implements Tooltipable
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getTitle(): string 
    {
        return $this->firstName.' '.$this->lastName;
    }
    public function getDescription(): string
    {
        return $this->getTitle().' est un utilisateur de notre site';
    }
}