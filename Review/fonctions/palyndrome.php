<?php

while(true) {
    $mot = readline('Entre le mot : ');
    if ($mot === '') {
        exit('Fin du programme !');
    }
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse) {
        echo "Ce mot est un palydrome. \n";
    } else {
        echo "Ce mot n'est pas un palyndrome. \n";
    }
}

?>
