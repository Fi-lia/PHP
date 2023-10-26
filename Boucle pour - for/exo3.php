<?php


$fac = readline("Entrez un nombre : ");
$factorielle = 1;

for($i=1; $i<=$fac ; $i++){

    $factorielle = $factorielle * $i;
}

echo $factorielle;
