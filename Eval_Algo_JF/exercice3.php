<?php

echo "Racine de l'équation du 2nd degré \n        y = ax2 + bx + c" . "\n";

$reponse = "O";

while ($reponse == "O"){
    $a = readline("Quelle est la valeur de a : "); // on demande à l'utilisateur de rentrer une valeur 
    $b = readline("Quelle est la valeur de b : "); // same
    $c = readline("Quelle est la valeur de c : "); // same

$delta = ($b * $b) - (4 * $a * $c); //operation du delta
if($delta<0)
{
    echo "L'équation de posséde pas de racine réelle :\n d = " . $delta;
}
elseif($delta>0)
{
    echo "L'équation posséde 2 racines distinctes \n d =" .$delta . "\n";
    echo "L'équation s'annule pour : " . "\n" . "X1 = " . $racine1 = -($b-sqrt($delta))/(2*$a) . "\n";
    echo "X2 = " . $racine2 = -($b+sqrt($delta))/(2*$a);
}
elseif($delta==0)
{
 echo "L'équation posséde une racine double : \n d = " . $delta . "\n";
 echo "X1=X2= " . -$b/(2*$a);
}
$reponse = readline("Voulez-vous continuer ?");
}