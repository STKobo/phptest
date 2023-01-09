<?php 

require_once 'Product.php';

class Book extends Product
{
    public string $author;
    public int $pagesNumber;

    public function __construct(float $price, string $title, string $author, int $pagesNumber)
    {
        parent::__construct($price, $title);
        $this->author = $author;
        $this->pagesNumber = $pagesNumber;
    }
}