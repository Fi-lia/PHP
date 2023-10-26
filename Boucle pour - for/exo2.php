<?php

$nombre = readline("Entrez un nombre : ");

    echo("Les 5 nombres précèdents sont : ") . "\n";
for($i=1; $i<=5 ; $i++) {
    echo $nombre -$i . "\n" ;
}

echo("******************************") . "\n";

echo("Les 5 nombres suivants sont : ") . "\n";

for($i=1; $i<=5 ; $i++) {
    
    echo $nombre +$i . "\n" ;
}

?>