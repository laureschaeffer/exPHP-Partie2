<h1> Exercice 9 </h1>

<p> Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle") </p>

<h2> Resultat </h2>

<!-- <form>

    <input type="radio" id="masculin" name="genre" />
    <label for="masculin">Masculin</label>
    <br>

    <input type="radio" id="feminin" name="genre" />
    <label for="feminin">Feminin</label>
    <br>

    <input type="radio" id="autre" name="genre" />
    <label for="autre">Autre</label>

</form> -->

<?php

$nomsRadio=["Masculin", "Féminin", "Autre"];

echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio){
    $result="<form>";
    foreach($nomsRadio as $genre){
        $result.= "<input type='radio' id='$genre' name='genre' />
        <label for='$genre'> $genre </label> <br>";
    }
    $result.="</form>";
    return $result;

}