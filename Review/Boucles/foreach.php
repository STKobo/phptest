<?php 

$notes = [10, 15, 16];

foreach ($notes as $note){
    echo "- $note \n";
}




$notes = [10, 15, 16];
$eleves = [
    'cm2' => ['Anatole', 'Jackie', 'Martin', 'Emilie'],
    'cm1' => ['Tarik', 'Kim']
];

foreach ($eleves as $classe => $listEleves){
    echo "La classe $classe \n";
    foreach($listEleves as $eleve) {
        echo "- $eleve \n";
    }
    echo "\n";
}




?>