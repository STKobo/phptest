<?php 

require_once 'Moto.php'; 

$moto = new Moto(); 
$moto->brand = "Kawasaki";
$moto->color = "noire";
$moto->maxSpeed = 238; 

echo $moto->getDescription();
