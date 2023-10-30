<?php

//premiere image

for($i=0;$i<=6;$i++){ //de 1 à 6 etoiles
    for($j=0;$j<=$i;$j++){
        $tab[$i][$j] = "*";
        echo $tab[$i][$j];
    } 
    echo "\n";
}

//de 6 à 1 etoile
for($i=5;$i>=0;$i--){ // boucle for (6 - 1) on commence à 5
    for($j=$i;$j>=0;$j--){ // (-- vu que c'est inversé)
        $tab[$i][$j] = "*";
        echo $tab[$i][$j];
    } 
    echo "\n";
}


// deuxieme image 

for($i=0;$i<8;$i++){ //$i ligne
    for($j=0;$j<=$i;$j++){ //$j colonne
    
        if($j==0 or $i==7 or $j==$i){
            echo "X";
        }else{
            echo "0";}
    } 
    
    echo "\n";
    }
   