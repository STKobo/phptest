<?php 

class DestroyMe {
    function __destruct() {
        echo 'Je suis mort !';
    }
}

$destroyMe1 = new DestroyMe();
unset($destroyMe1); //affiche 'Je suis mort !' 

$destroyMe2 = new DestroyMe();

$destroyMe3 = new DestroyMe(); 
$destroyMe3 = null; // Affiche 'Je suis mort !' 

