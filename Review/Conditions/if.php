<?php 
$action = (int)readline('Entrez votre action : (1 : Piocher, 2 : défausser, 3: passer mon tour '); 

switch ($action){
    case 1:
        echo 'Je pioche !';
        break;
    case 2: 
        echo 'Je me défausse !';
        break;
    case 3; 
        echo 'Je passe mon tour';
        break;
    default:
        echo 'Commande inconnue';
}

/*

if ($action === 1) {
    echo 'J\'attaque.';
} elseif ($action === 2) {
    echo 'Je défends';
}
elseif ($action === 3) {
    echo 'Je passe mon tour..';
} else {
    echo 'Commande inconnue';
}
*/
?>