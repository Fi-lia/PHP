<?php 

//question 1
function TTC($prixht,$nbrarticle,$tva){
    $prixTTC = $prixht*(1 + $tva/100) * $nbrarticle;
    return $prixTTC;
}

//question 2
function pgcd( $a , $b ){
    if (( $a <= 0 ) || ( $b <= 0 ))
     return ("Veuillez passer 2 nombres strictement positifs"); 
     while ($b > 0) 
     { 
     $r = $a % $b; 
     $a = $b; 
     $b = $r; 
     } 
     return $a; 
   }

   //question 3

   function ppcm($a,$b){

    $res = $a * $b;
    while($a > 1){
        $r = $a % $b;
    if($r == 0 ){
      $result = $res / $b;
        break;  
             }
        $a = $b;
        $b = $r;
    }
     return $res;
}

//question 4

function tablemultiplication($nombre){

for($i=1;$i<=10;$i++){
    echo "$i x $nombre = " . $i * $nombre . "\n";
}
}

//question 5

function factorielle($fac){
    $factorielle = 1;

for($i=1; $i<=$fac ; $i++){

    $factorielle = $factorielle * $i;
}
return $factorielle; // si on veut recupere le resultat
}

// question 6

function sommetab($tab){
    return array_sum($tab);
}

$tab62 = [49, 78 ,48, 73, 26, 195,203];


//question 7


function figure($tab){
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
}


