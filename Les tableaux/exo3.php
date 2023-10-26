<?php
// Supposons que vous avez déjà un tableau de valeurs
$tableau = array(10, 20, 30, 40, 50);

// Initialisez une variable pour stocker la somme
$somme = 0;

// Parcourez le tableau et additionnez les valeurs
foreach ($tableau as $valeur) {
    $somme += $valeur;
}

// Affichez la somme
echo "La somme des valeurs du tableau est : $somme\n";
?>