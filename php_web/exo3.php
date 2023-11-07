<?php ob_start()?>
 <form action="#" method="post"> <!-- pour utilsateur-->
    <label for="table">Rayon</label>
    <input type="number" name="table" id="table"><br/>
    
    <label for="case1">Perimetre: </label>
    <input type="checkbox" name="cocher" value="oui" > <br/>  
      
    <label for="case2">Aire: </label>
    <input type="checkbox" name="cocher2" value="oui" >    
        <br/>

    <input type="submit" value="Envoyer">
</form>


<div class="multi">
<?php


echo "<h2> Résultats </h2>" ."<br/>";

if(isset($_POST["table"]) && isset($_POST["cocher"])){
       
        $perimetre = 2 * pi() * $_POST["table"];
    
        echo "Le perimetre d'un cercle est de rayon : " . $_POST["table"] . " est : " . $perimetre . "<br/>"; 
       
}if(isset($_POST["table"]) && isset($_POST["cocher2"])){
    
    $aire = pi() * $_POST["table"] * $_POST["table"];

    echo "L'aire d'un cercle est de rayon : " . $_POST["table"] . " est : " . $aire;
}


// if(isset($_POST["table"])>0){
//     echo "Entrez une valeur correcte";



?>
</div>

<!--echo "L'aire d'un cercle est de rayon : " . $_POST["table"] . " est : " . $aire;$aire = pi() * $_POST["table"] * $_POST["table"];-->

<?php
$content = ob_get_clean();
$titre = "Cercle - Périmètre et Aire";
require "template.php";
?>