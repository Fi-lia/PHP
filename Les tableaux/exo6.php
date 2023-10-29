
<?php

$notes = [];//stocker note

echo "Entrez le nombre d'élèves dans la classe : ";
$n = readline();

$somme = 0;

// Saisie des notes
for ($i = 1; $i <= $n; $i++) {
    echo "Entrez la note de l'élève $i : ";
    $note = readline();
    array_push($notes, $note);
    $somme += $note;
}

// Calculer la moyenne en divisant la somme par n
$moyenne = $somme / $n;

// Initialiser une variable pour compter les notes supérieures à la moyenne
$count = 0;

// Compter les notes supérieures à la moyenne
foreach ($notes as $note) {
    if ($note > $moyenne) {
        $count++;
    }
}

echo "Le nombre de notes supérieures à la moyenne est : $count\n";
?>