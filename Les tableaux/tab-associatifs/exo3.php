<?php 

$tabNotes = array('prenot' => array(2, 10, 14),'perthuis' => array(10, 18, 12),'berangere' => array(12, 13, 18),'pomme' => array(14, 16, 12),'christophe' => array(8, 10, 19));

foreach($tabNotes as $nom => $notes){
    echo "Le nom est : " . $nom .  " avec une note de " . implode(',',$notes) . "\n";
}

echo "\n";

foreach ($tabNotes as $nom => $notes) {
    $moyenne = array_sum($notes) / count($tabNotes);
    echo "Élève : $nom, avec une moyenne : $moyenne \n";
}