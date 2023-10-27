<?php

$prix = [5,50,23,11];
$quantites = [10,1,4,3];
$totals = [];

for($i=0; $i<4;$i++ ){
$total = $prix[$i] * $quantites[$i];
$totals[]= $total;
}

echo "le nouveau tableau";
foreach ($totals as $value){
    echo $value . " ";
}

$somme = array_sum($totals);
echo $somme;