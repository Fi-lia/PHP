<?php ob_start()?>


<form method="post" action="#">
        <label for="montant">Montant (€):</label>
        <input type="number" name="montant" id="montant" required>
        <br>

        <label for="devises">Convertir en :</label>
        <select name="devise" required>
        <option value="" selected>--Choisir une option--</option>
        <option value="Dollar Us">Dollar Us</option>
        <option value="Yen">Yen Japon</option>
        <option value="livre sterling">Livre sterling RU</option>
        <option value="Dollar canadien">Dollar canadien</option>
        </select>
        <br>

        <input type="submit" value="Convertir">
    </form>

<div class="multi">
<?php

//DES que lutilisateur va choisir une option, la valeur selectionne sera stockée dans la variable $_POST["devise"]

if(isset($_POST["devise"])){ // on verifie que la valeur $_POST["fruit"] existe
    $de = $_POST["devise"];  //on recupere la valeur selec en stockant la variable $_POST[]"devise"] dans une variable $devise.

    // echo "vous avez selectionne : " . $devise;
    $devise = array("Dollar Us"=>1.07, "Yen" =>160.84, "livre sterling" =>0.87, "Dollar canadien"=>1.47);
    $resultat = $devise[$de] * $_POST["montant"];
    echo  "<div class='resultat'> Resultats : " . "<p> $resultat </p>" . "</div>";

}
?>
</div>





<?php
$content = ob_get_clean();
$titre = "Convertisseur de monnaie";
require "template.php";
?>