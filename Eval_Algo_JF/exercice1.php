<?php


echo "        CALCUL D'UN CERCLE \n";
echo "\n";

$reponse = "O";

while ($reponse == "O"){
$nombre = readline("Quel est le rayon de ce cercle : ");
$circonference = 2 * pi() * $nombre;
$surface = pi() * $nombre * $nombre;

echo "Sa circonférence est de            : $circonference \n";
echo "Sa surface est de                  : $surface \n";

$reponse = readline("Voulez vous faire un autre calcul (O/N) : ");
}