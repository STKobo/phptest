<?php

function repondre_oui_non($phrase){
    while(true) {
        $reponse = readline($phrase . "- (o)ui / (n)on "); 
        if ($reponse === "o") {
            return true ; 
        } elseif ($reponse === 'n') {
            return false ; 
    } 
    
    }
}

$resultat = repondre_oui_non('Voulez vous continuer ? '); 

var_dump($resultat); 

?>
