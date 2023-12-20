<h1> Exercice x </h1>

<p> Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés. </p>

<h2> Resultat </h2>

<!-- <form>
   <label for="nom">Nom</label> le for est relié au id
   <br>
   <input name="nom" id="nom" type="text" />
    <br>
   <label for="prenom"> Prenom </label>
   <br>
   <input name="prenom" id="prenom" type="text" />
   <br>
   <label for="ville"> Ville </label>
   <br>
   <input name="ville" id="ville" type="text" />

</form> -->

<?php

$formulaireInput= ["Nom", "Prenom", "Ville"];

echo afficherInput($formulaireInput);

function afficherInput($formulaireInput) {
    $result= "<form>";
    foreach($formulaireInput as $label) {
    $result .= "<label for='$label'> $label </label>
                    <br>
                    <input name='$label' id='$label' type='text' />
                    <br>";
    }
    $result .= "</form>";
    return $result;
}