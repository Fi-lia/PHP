<?php 

$tabNotes = array("prenot"=> array(2, 10, 14),"perthuis"=> array(10, 18, 12),"berangere"=> array(12, 13, 18),"pomme"=> array(14, 16, 12),"christophe"=> array(8, 10, 19));

//question 1
foreach($tabNotes as $nom => $notes){
    echo "Élève: " . $nom . " avec des notes de : ";
    foreach($notes as $resultat){
    echo " $resultat ";
    }
    echo "\n";
}

echo "\n";

//question 2
foreach ($tabNotes as $nom => $notes) {
    $moyenne = array_sum($notes) / count($tabNotes);
    echo "Élève : $nom, avec une moyenne : $moyenne \n";
}

//question 3
echo "\n";

$saisi = readline("Entrez le nom de l'élève ");

foreach($tabNotes as $nom => $notes){
   if($nom=$saisi){
    $eleve = $nom;
    $variable = true;
   }
}
if($variable){
    echo $eleve;
    $moyenne2 = array_sum($tabNotes[$eleve])/ count($tabNotes[$eleve]);
    echo $moyenne2;
}