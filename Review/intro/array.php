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

for($d = 1; $d < 11; $d++){
    echo $d . " - ";
}

echo "<br />";

foreach($array as $element){
    echo $element . " - ";
}

$d = 1;
while($d < 11){ 
    echo $d . " - ";
    $d++; 
}

for($d = 0; $d < count($array); $d++){
    echo $array[$d];
}