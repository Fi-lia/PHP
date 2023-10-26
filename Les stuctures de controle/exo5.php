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