<?php ob_start()?>


<form action="#" method="get">
    Combien de notes : <input type="number" name="table" id="table"> <br>
    <input type="submit" value="Valider">
</form>


<div class="multi">

<?php
    
 
    if(isset($_GET["table"])){
        $nombre_de_notes =$_GET["table"];
    echo "<fieldset>";
    echo "<legend>Moyenne : </legend>";
        for ($i = 1; $i <= $nombre_de_notes; $i++) {
            echo "<p>Note$i: <input type='number' name='note' id='note'></p>";
            
    }   
    echo "<input type='submit' value='Valider'>";
    echo "</fieldset>";
    }

    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Calculer une moyenne";
require "template.php";
?>