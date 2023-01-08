<?php 

require_once "vendor/autoload.php";

use App\Shop\ProductCirc;
use App\Shop\ProductRect;

$productRect = new ProductRect("Téléviseur", 400, 200, 80);
var_dump($productRect);

$productCirc = new ProductCirc("Ballon", 25, "description pour un ballon rond", 40);
var_dump($productCirc);