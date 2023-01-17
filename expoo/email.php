<?php 

class Email 
{
    private string $email; 

    public function __construct(string $email)
    {
        $this->email = $email;

        if(!$this-> isValid()){
            throw new InvalidArgumentException("Le format de l'email est incorrecte");
        }
    }

    public function isValid(): bool 
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
}
}
