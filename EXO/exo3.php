<?php

$prixht = readline("Entrez le prix de l'article : ");
$nbrarticle = readline("Entrez le nombre d'article : ");
$tva = readline("Entrez la tva : ");

$prixTTC = $prixht*(1 + $tva) * $nbrarticle;

echo "Le prix TTC est : " .$prixTTC

?>