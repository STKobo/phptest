<?php 

class User 
{
    private int $id;
    public string $name; 
    public int $age; 
    public string $description; 

    public function __construct(int $id)
    {
        $this->id = $id ; 
    }

    public function getId(): int
    {
        return $this->id;
    }
}

$user = new User(123);

var_dump($user);

echo $user->getId();

$admin = new User(1);