<h1> Exercice 6 </h1>

<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs. <br>
Exemple :  <br>

$elements = array("Monsieur","Madame","Mademoiselle"); <br>
alimenterListeDeroulante($elements); <br>
</p>

<h2> Resultats </h2>

<FORM>
<SELECT name="Civilite" size="1">
<OPTION>Monsieur
<OPTION>Madame
<OPTION>Mademoiselle
</SELECT>
</FORM>

<?php
$civilite = array ("Monsieur","Madame","Mademoiselle");

alimenterListeDeroulante($civilite);

function alimenterListeDeroulante ($array) {
    echo"<select>";

    foreach ($array as $input) {
 echo"<option value= '.$input.'>".$input."</option>" ;
    }
 echo "</select>" ;
 
 echo "<input type='OK' value='OK'>";
}