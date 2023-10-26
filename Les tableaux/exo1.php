<?php

$notes = array(); /*declare un tableau de 9 notes*/

for ($i = 1; $i <= 9; $i++) {
    echo "Entrez la note $i : ";
    $note = floatval(readline()); // Utilisation de la fonction readline() pour lire l'entrée utilisateur
    $notes[] = $note;
}

// Calcul de la moyenne des notes
$somme = array_sum($notes);
$moyenne = $somme / count($notes);

// Affichage de la moyenne
echo "La moyenne des notes est : $moyenne\n";

?>