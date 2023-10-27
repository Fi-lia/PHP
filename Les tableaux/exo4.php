<?php

//tableau de départ
$tab1 = [4,8,7,9,1,5,4,6];
$tab2 = [7,6,5,2,1,3,7,4];

//nouveau tableau vide
$tab3 = [];


for($i=0; $i<count ($tab1);$i++ ){
$somme = $tab1[$i] + $tab2[$i];
$tab3[] = $somme;
}

echo "le nouveau tableau";
foreach ($tab3 as $value){
    echo $value . " ";
}