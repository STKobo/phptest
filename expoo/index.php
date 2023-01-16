<?php 

class User 
{
    private const LEGAL_AGE = 18; 

    private int $id;
    private string $name; 
    private int $age; 
    private string $description; 
    private bool $active;

    public function __construct(int $id)
    {
        $this->id = $id ; 
    }

    /**
     * Returns true if user's age is over fixed legal age
     *
     * @return boolean
     */
    public function hasLegalAge(): bool
    {
        return $this->age >= self::LEGAL_AGE;
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

    public function getActive(): bool
    {
        return $this->active; 
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }
}

$user = new User(123);

var_dump($user);

echo $user->getId();
$user->setName('Gad')
    ->setAge(59)
    ->setDescription('description de Gad')
    ->setActive(true);

echo $user->getName();

$admin = new User(1);
$admin->setAge(32);
echo $admin->hasLegalAge() ? "L'admin est autorisé " : " non autorisé "; 