<?php ob_start()?>

<form action="#" method="post">
<label for="table">Hauteur de la pyramide : </label>
    <input type="number" name="table" id="table">
    <input type="submit" value="Envoyer">
</form>

<div class="multi">
<?php 
    if(isset($_POST["table"])){
        echo "<h2> Pyramide de hauteur :  ". $_POST["table"] . "</h2>" ."<br/>";

for( $i = 0; $i <= $_POST["table"]-1; $i++){ 
    for($j=0;$j<=$i;$j++){
        $tab[$i][$j] = "X";
        echo $tab[$i][$j];
    } 
    echo "<br/>";
}

for( $i = $_POST["table"];$i >= 0; $i--){ 
    for($j = $i; $j >= 0; $j--){ 
        $tab[$i][$j] = "X";
        echo $tab[$i][$j];
    } 
    echo "<br/>";
}
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>
</div>


<?php
$content = ob_get_clean();
$titre = "Affichage d'une pyramide";
require "template.php";
?>