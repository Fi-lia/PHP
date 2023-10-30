<?php

$chomage = array("Autriche" =>4.9, "Allemagne" =>9.3 ,"Danemark" =>4.8 ,"Espagne" =>9.4 ,"France" =>9.7);

$payschomagemin = "";
$tauxchomagemin = min($chomage);

foreach($chomage as $pays => $taux){
    echo "Le pays est " . $pays . " : " . $taux . "% de chomage \n";
}

echo "\n";

foreach($chomage as $pays => $taux){
    if ($taux<5){
        echo "Le pays qui a un taux de chômage inférieur à 5% est : $pays \n";
    }
}

echo "\n";

foreach ($chomage as $pays => $taux) {
    if ($taux < $tauxchomagemin) {
        $tauxchomagemin = $taux;
        $payschomagemin = $pays; 
    }  
}
echo "Le pays avec le taux de chômage le plus bas est $pays avec un taux de $tauxchomagemin%";