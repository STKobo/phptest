<?php 

class user 
{
    public int $id;
    public string $name = 'John';
    public string $surname;

    //on déclare notre constructeur 
    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function sayHello(): string 
    {
        return 'Bonjour '.$this->name.' '.$this->surname;
    }
}