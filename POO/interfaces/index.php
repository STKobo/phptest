<?php

require_once 'Seller.php';
require_once 'Company.php';
require_once 'Product.php';

$company = new Company('JD', 'SARL', 'les composants informatiques');
$user = new User('John', 'Doe');
$seller = new Seller('Laure', 'Dupond', $company);
$product = new Product ('Carte mère', 'Socket LGA1151');

displayTooltip($company);
displayTooltip($user);
displayTooltip($seller);
displayTooltip($product);