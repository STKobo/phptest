<?php 

require_once "vendor/autoload.php";

use App\Shop\Product; 

$product = new Product("Mon produit",123.3);

$product->setName("Mon produit");
echo $product->getName();

var_dump($product);

