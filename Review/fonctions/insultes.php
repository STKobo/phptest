<?php

$insultes = ['merde', 'con']; 
$asterisque = [];
foreach ($insultes as $insulte) {
    $asterisque[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1); 
}
$phrase = readline('Entrez une phrase : '); 
$phrase = str_replace($insultes, $asterisque, $phrase);

/*foreach($insultes as $insulte) {
    $taille = strlen($insulte);
    $replace = str_repeat('*', $taille);
    $phrase = str_replace($insulte, $replace, $phrase);
}
*/

echo $phrase; 

?>

