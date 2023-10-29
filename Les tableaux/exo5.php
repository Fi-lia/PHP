<?php

// Demander à l'utilisateur le nombre de valeurs à saisir
echo "Entrez le nombre de valeurs à saisir : ";
$n = readline();

// Initialiser un tableau pour stocker les valeurs
$valeurs = array();

// Saisie des valeurs
for ($i = 1; $i <= $n; $i++) {
    echo "Entrez la valeur $i : ";
    $valeur = readline();
    array_push($valeurs, $valeur);
}

// Recherche de la plus grande valeur et sa position
$plus_grande_valeur = $valeurs[0];  // Supposons que la première valeur est la plus grande
$position = 1;  // Supposons que la première valeur est à la position 1

for ($i = 1; $i < $n; $i++) {
    if ($valeurs[$i] > $plus_grande_valeur) {
        $plus_grande_valeur = $valeurs[$i];
        $position = $i + 1; // Les positions commencent à 1, pas à 0
    }
}

echo "La plus grande valeur est : $plus_grande_valeur\n";
echo "Elle se trouve à la position : $position\n";


