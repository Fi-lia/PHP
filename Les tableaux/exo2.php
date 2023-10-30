<?php

$n = readline("Entrez le nombre de valeurs : ");

$negatives = 0;
$positives = 0;

$valeurs = [];

for($i=0; $i<$n; $i++){
    echo "saisissez la valeur #" . ($i+1) . ": ";
    $valeur = readline();

    if($valeur<0){
        $negatives++;
    } elseif($valeur >0){
        $positives++;
    }

    $valeurs[]= $valeur;
}

echo "Nombre de valeurs positives : $positives\n";
echo "Nombre de valeurs négatives : $negatives\n";

echo "Valeurs saisies : ";
echo implode(", ", $valeurs) . "\n";