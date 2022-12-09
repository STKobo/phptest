<?php

$creneaux = [];

while (true){
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l\'heure d\'ouverture ($debut) est supérieure à l\'heure de fermeture ($fin).";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez vous enregistrer un nouveau créneau (o/n) ');
        if ($action === 'n'){
            break;
        }
    }
}
$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ? ");
$creneauTrouve = false; 

foreach($creneaux as $creneau){
    if ($heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneauTrouve = true;
        break;
    }
}



if ($creneauTrouve){
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé le magasin est fermé';
}



?>