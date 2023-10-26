<?php

// $n = readline("Entrez le nombre de valeurs");
$n = intval(fgets(STDIN));

$negatives = 0;
$positives = 0;

$valeurs = array(); //declaration dun tableau pour stocker les valeurs

for($i=0; $i<$n; $i++){
    echo "saisissez la valeur #" . ($i+1) . ": ";
    $valeur = floatval(fgets(STDIN));

    if($valeur<0){
        $negatives++;
    } elseif($valeur >0){
        $positives++;
    }

    $valeurs[]= $valeur;
}

//afficher le nbr de valeur + et -
echo "Nombre de valeurs positives : $positives\n";
echo "Nombre de valeurs négatives : $negatives\n";

echo "Valeurs saisies : ";
echo implode(", ", $valeurs) . "\n";