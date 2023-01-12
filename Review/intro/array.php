<?php 

$array = [1, 2, 3, 4]; 
var_dump($array);

$array[] = "Coucou"; 
var_dump($array);

array_unshift($array, "Bonjour");
var_dump($array);

$array[10] = "Ni hao";
var_dump($array);