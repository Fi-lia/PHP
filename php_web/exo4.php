<?php ob_start()?>


<form action="#" method="post">
<input type="reset" value="Reinitialiser"> <br>

Quel est le chiffre : <input type="number" name="table" id="table"> <br>
<input type="submit" value="Valider"> <br>
</form>

<div class="multi">
<?php

if(isset($_POST["table"]))
{
    $nombre_ordinateur = rand(1,10);
    $supposition = $_POST["table"];

    if($supposition == $nombre_ordinateur){
        echo "<h2> Perfect, vous avez trouvé le nombre choisi par l'ordinateur qui est : $nombre_ordinateur </h2>";
    }elseif($supposition > $nombre_ordinateur){
        echo "<h2> Le chiffre est plus grand </h2>";
    }elseif($supposition < $nombre_ordinateur){
        echo "<h2> Le chiffre est plus petit </h2>";
    }
}


?>
</div>


<?php
$content = ob_get_clean();
$titre = "Trouvez le nombre choisi par l'ordinateur";
require "template.php";
?>