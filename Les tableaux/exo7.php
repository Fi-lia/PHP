<?php

$prix = [5,50,23,11];
$quantites = [10,1,4,3];

$total = 0;


for($i=0; $i<4;$i++ ){
$total += $prix[$i] * $quantites[$i];
}

echo "le prix total est : $total";

// $somme = array_sum($totals);
// echo $somme;

