<h1> Exercice 6 </h1>

<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs. </p>

<h2> Resultat </h2>
<!-- <form>
    <label for="civilite"> </label>
    <select name="civilite">
        <option value="monsieur"> Monsieur </option>
        <option value="madame"> Madame </option>
        <option value="mademoiselle"> Mademoiselle </option>
    </select> 
</form>  -->

<?php

$liste= ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($liste);

function alimenterListeDeroulante($liste) {
    $resultat= "<form>
                    <label for='civilite'> </label>
                    <select name='civilite'>";
    foreach($liste as $civilite) {
        $resultat.= "<option value='$civilite'> $civilite </option>";
    }
    $resultat.= "</form";
    return $resultat;
}