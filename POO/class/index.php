<?php

include ('User.php'); 

$robert = new User(); 
$robert->name = 'Robert';

$laure = new User();
$laure->name = 'Laure';
$laure->surname = 'Dupond';

echo $laure->name;
echo $robert->name;
