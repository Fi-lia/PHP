<?php

$tabNotes = array("BOUCHER"=>16, "BOURDETTE" =>13, "BERANGERE" =>10, "POMME"=>6, "CHRISTOPHE"=>14);

foreach($tabNotes as $nom => $note){
    echo "Le nom est : " . $nom .  " avec une note de " . $note . "/20\n";
}

echo "\n";

$totalnotes = array_sum($tabNotes); //calcul la somme des valeurs du tableau 
$nombreEleves = count($tabNotes);

$moyenne = $totalnotes / $nombreEleves;
echo "La moyenne des notes est : $moyenne";