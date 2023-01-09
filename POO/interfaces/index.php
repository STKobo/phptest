<?php

require_once 'Seller.php';
require_once 'Company.php';
require_once 'Product.php';

$user = new User('John', 'Doe'); 
$company = new Company('JD', 'SARL', 'composants informatiques');
$seller = new Seller('Laure', 'Dupond', $company);
$product = new Product('Carte mère', 'Socket LGA1151');