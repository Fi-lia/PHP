<?php 

$age = readline("Entrez l'âge de votre enfant : ");

if($age >= 12){
    echo " Catégorie Cadet";
}elseif($age >=10){
    echo " Catégorie Minime";
}elseif($age >=8){
    echo " Catégorie Pupille";
}elseif($age >=6){
    echo " Catégorie Poussin";
}

?>


(remplace le elseif)

$age = readline("");

switch($age){
    case $age >=12,
    echo "cadet";
    break;
    case $age >=10,
    echo "minime";
    break;
    case $age >=8,
    echo "pupille";
    break;

    default (cas particulier age non pris en charge)
}