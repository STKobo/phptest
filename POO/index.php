<?php 

function sayHello(array $user): void 
{
    if (!isset($user['civility']) || !isset($user['name']) || !isset($user['surname'])){
        echo 'Erreur : on ne passe pas un utilisateur';
    } else {
        echo 'Bonjour '.$user['civility'].' '.$user['name'].' '.$user['surname'];
    }
}

include("fonctions/userLoading.php");

$user1 = loadUser(id:1);
$user2 = loadUser(id:2);

sayHello($user1);
sayHello($user2);