<?php ob_start()?>

<form action="#" method="post">

<fieldset>
    <legend> Recherche d'emploi : </legend> <br>
    <h4>Remplir la fiche</h4> <br>

    <div class="coordonnee">
    <label for="prenom">Prénom</label> <br>
    <input type="text" name="prenom" size="10" maxlength="40" value="" id="prenom" required/>
    <label for="nom">Nom</label>
    <input type="text" name="nom" size="10" maxlength="40" value="" id="nom" required/>
    <label for="date">Naissance</label>
    <input type="date" value="" required/>
    <label for="email">Email</label>
    <input type="email" value="" required/>
    </div> <br>

    <div class="langue">
    <h4>Langues pratiquées </h4>
    <select name="langue" multiple>
    <option value="Allemand">Allemand</option>
    <option value="anglais">Anglais</option>
    <option value="Arabe">Arabe</option>
    <option value="Espagnol">Espagnol</option>
    <option value="Italien">Italien</option>
    <option value="Neerlandais">Neerlandais</option>
    </select>
    </div>

    <h4>Compétences informatiques</h4>
    HTML 5 <input type="checkbox" name="html 5" value="html 5"> 
    CSS 3 <input type="checkbox" name="css 3" value="css 3"> 
    Javascript <input type="checkbox" name="javascript" value="javascript">
    jQuery <input type="checkbox" name="jQuery" value="jQuery"> 
    AJAX <input type="checkbox" name="ajax" value="ajax"> 
    PHP <input type="checkbox" name="php" value="php"> 
    MySQL <input type="checkbox" name="mysql" value="mysql"> 
    JEE <input type="checkbox" name="jee" value="jee"> 
    ASP.Net <input type="checkbox" name="asp.net" value="asp.net"> 

    



    <p>
    <input type="reset" value="Effacer" />
    <input type="submit" value="Envoyer" />
    </p>


</fieldset>









</form>



<?php
$content = ob_get_clean();
$titre = "Recherche d'emploi";
require "template.php";
?>