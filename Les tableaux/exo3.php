<?php

$tableau = [10, 20, 30, 40, 50];

$somme = 0;

foreach ($tableau as $valeur) {
    $somme += $valeur;
}

echo "La somme des valeurs du tableau est : $somme\n";
?>