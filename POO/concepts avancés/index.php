<?php 

require_once 'Seller.php'; 

$seller = new Seller('John', 'Doe', 'JD Incorporated');
echo $seller->getDisplayedName(); // Affiche John Doe 
