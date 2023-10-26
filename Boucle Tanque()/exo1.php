<?php
    while (true) {
        $nombre = readline("Entrez un nombre entre 1 et 3 : ");

        if ($nombre >= 1 && $nombre <= 3) {
            echo "Vous avez saisi un nombre valide : $nombre\n";
            break; // Sortir de la boucle
        } else {
            echo "Nombre invalide. Veuillez réessayer." . '<br>';
        }
    }
?>