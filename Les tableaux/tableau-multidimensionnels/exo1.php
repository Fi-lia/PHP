<?php

$tab = [[3,5,4,5,8,9,7,8],[12,5,4,5,8,9,7,8],[3,5,4,5,8,9,7,8],[3,5,4,5,8,40,7,8],[3,5,4,5,8,9,7,8],[3,5,4,31,8,9,7,8],[3,5,4,5,7,9,7,8],[3,5,4,5,30,9,7,8],[3,5,12,5,8,9,7,8],[3,5,4,5,14,9,7,8],[3,5,4,5,36,9,7,8],[3,5,4,5,8,9,7,8]];
// $max = $tab[0][0];

for($i=0;$i<12;$i++){
    for($j=0;$j<8;$j++){
        echo $tab[$i][$j] . " ";
        if($tab[$i][$j]>$max){
            $max = $tab[$i][$j];
        }
    }
    echo "\n";

}

echo "La plus grande valeur est : $max";