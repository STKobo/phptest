<?php


$creneaux = []; 

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l\'heure d\'ouverture ($debut) est supérieure à l\'heure de fermeture ($fin)";

    } else {
        $creneaux[] = [$debur, $fin];
        $action = readline('Voulez vous enregistrer un nouveau créneau (o/n) ');
        if ($action === 'n'){
            break;
        }
    } 
}

print_r($creaneaux);
?>
