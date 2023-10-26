<?php

$nbr1 = readline("Entrez un nombre : ");

$max = $nbr1;
$min = $nbr1;

for($i=1; $i<=4 ; $i++){
    $nbr1 = readline("Entrez un nombre : ");

    if($nbr1>$max){
        $max=$nbr1;
    }
    elseif($nbr1<$min){
        $min=$nbr1;
    }
}

echo $max . "\n";
echo $min;