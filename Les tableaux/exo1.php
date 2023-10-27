<?php

$notes = [];


$somme = 0; //initialisation note


for ($i = 1; $i <= 9; $i++) {
    echo "Saisir la note $i : ";
    $note = readline();
    
    $notes[] = $note; //ajout note au tableau

    $somme += $note;
}


$moyenne = $somme / 9;

echo "La moyenne des notes est : $moyenne";
?>