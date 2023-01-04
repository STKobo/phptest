<?php

$laure = new User('Laure', 'Dupond');
$robert = new User('Robert', 'Rondon');
// Nos objets sont instanciés en une seule ligne ! 

echo $robert->sayHello(); 
// affiche bien Bonjour Robert Rondon
