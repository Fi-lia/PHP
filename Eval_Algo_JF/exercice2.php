<?php

echo "****    Table de multiplication  ****"  . "\n";
echo "\n";

$reponse = "O"; // declarer la meme valeur que le while 

while ($reponse == "O"){ //boucle tant que pour demander à l'utilsateur si il veut continuer

$nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : "); 
for($i=1;$i<=10;$i++){
    echo "$i x $nombre = " . $i * $nombre . "\n";  
}
 
$reponse = readline("Voulez vous continuer (O/N) : ");
}
