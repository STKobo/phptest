<?php 

require_once "vendor/autoload.php";

use App\Shop\AbstractProduct;
use App\Shop\ProductCirc;
use App\Shop\ProductRect;

$productRect = new ProductRect("Téléviseur", 400, 200, 80);
var_dump($productRect);

$productCirc = new ProductCirc("Ballon", 25, "description pour un ballon rond", 40);
var_dump($productCirc);

var_dump($productRect->getSurface());
var_dump($productCirc->getSurface());


/**
 * Undocumented function
 *
 * @param AbstractProduct[] $product
 * @return void
 */
function listProducts(array $product)
{
    foreach ($product as $product) {
        $product->display();
    }
}

function displayProduct(AbstractProduct $product)
{
    echo $product->getName(). ' - '. $product->getSurface(). "<br />";
}

listProducts([$productRect, $productCirc]);
