<?php 

class User 
{
    private int $id;
    private string $name; 
    private int $age; 
    private string $description; 

    public function __construct(int $id)
    {
        $this->id = $id ; 
    }

    public function getId(): int
    {
        return $this->id;
    }

   
    public function getName(): string
    {
        return $this->name;
    }

    
    public function setName(string $name): self 
    {
        $this->name = $name;

        return $this;
    }

    
    public function getAge(): int 
    {
        return $this->age;
    }

    
    public function setAge(int $age):self
    {
        $this->age = $age;

        return $this;
    }

    
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self 
    {
        $this->description = $description;

        return $this;
    }
}

$user = new User(123);

var_dump($user);

echo $user->getId();
$user->setName('Gad');
echo $user->getName();

$admin = new User(1);