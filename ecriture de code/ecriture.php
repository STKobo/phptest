<?php 

class Logger 
{
    private static $instance; 
    private function __construct()
    {
        
    }
    private function __clone()
    {
        
    }
    public static function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance; 
    }
    public function logToFile(string $data): void 
    {

    }
}

$logger1 = Logger::getInstance();
$logger2 = Logger::getInstance();

if($logger1 === $logger2) {
    echo "C'est bien le même objet instancié une seule fois";
}