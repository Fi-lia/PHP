<?php ob_start()?>


<form action="#" method="get">
    Combien de notes : <input type="number"> <br>
    <input type="submit" value="Valider">
</form>


<div class="multi">

<!--boucle for en integrant le fieldset dedans-->
<fieldset>
    <legend> Moyenne : </legend>
    Note1 : <input type="number"><br>
    Note2 : <input type="number"><br>
    Note3 : <input type="number"><br>
    Note4 : <input type="number"><br>
    Note5 : <input type="number"><br>
    <input type="submit" value="Calculer">
</fieldset>
<?php

if(isset($_GET["table"])){
    echo "";
}


// $totalnotes = array_sum($tabNotes) calcul somme des valeurs; 
// $nombreEleves = count($tabNotes);

// $moyenne = $totalnotes / $nombreEleves;
// echo "La moyenne des notes est : $moyenne";









?>

</div>





<?php
$content = ob_get_clean();
$titre = "Calculer une moyenne";
require "template.php";
?>