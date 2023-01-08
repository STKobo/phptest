<?php

namespace App\Security;

use App\IDisplayable;

class User implements IDisplayable
{
    private string $name; 
    private string $email;
    
    public function __construct(
        string $name = "Jack",
        string $email = "jack@test.com"
    )
    {
        $this->name = $name;
        $this->email = $email; 
    }

    public function display(): void
    {
        echo $this->name . " - ". $this->email . "<br />";
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}