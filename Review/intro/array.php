<?php 

$array = [1, 2, 3, 4]; 
var_dump($array);

$array[] = "Coucou"; 
var_dump($array);

array_unshift($array, "Bonjour");
var_dump($array);

$array[10] = "Ni hao";
var_dump($array);

$monTableau = [...$array];
var_dump($monTableau);
// ici on perdra le numéro 10

$array = ["Konichiwa", ...$array];
var_dump($array);