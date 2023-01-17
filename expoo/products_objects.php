<?php 
require_once 'ProduitRect.php';
require_once 'ProduitCirc.php';

$produitRect = new ProduitRect("televiseur", 400, 150, 120);
$produitCirc = new ProduitCirc("Ballon", 25);

echo $produitRect->getName();

$produitrect->setName("Autre produit");
echo $produitRect->getName();

var_dump($produitRect);
var_dump($produitCirc);
