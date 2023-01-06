<?php 

require_once 'Seller.php';
require_once 'displayFunctions.php';

$user = new User('John', 'Doe'); 
$seller = new Seller('Laure', 'Dupond', 'JD Incorporated');

displayUserName($user);
displayUserName($seller);