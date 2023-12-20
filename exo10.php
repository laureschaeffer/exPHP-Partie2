<h1> Exercice 10 </h1>

<p> En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une listeFormations de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit) </p>

<h2> Resultat </h2>

<?php

$formulaireComplet= ["Nom", "Prenom", "Adresse e-mail", "Ville"];


function afficherInput($formulaireComplet) {
    $result= "";
    foreach($formulaireComplet as $label) {
    $result .= "<label for='$label'> $label </label>
                    <br>
                    <input name='$label' id='$label' type='text' />
                    <br>";
    }
    return $result;
}

$listeFormations= ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];


function choixFormation($listeFormations) {
    $resultat= "
                    <label for='formation'> Intitulé de formation : </label> <br>
                    <select name='formation' id='formation'>";
    foreach($listeFormations as $formation) {
        $resultat.= "<option value='$formation'> $formation </option>";
    }
    $resultat.= "<br>";
    return $resultat;
}

function afficherFormulaire($formulaireComplet, $listeFormations) {
    $result = "<form>";
    $result .= afficherInput($formulaireComplet);
    $result .= choixFormation($listeFormations);

    $result .= "<input type='submit' value='Validation' />";
    $result .= "</form>";
    return $result;
}

echo afficherFormulaire($formulaireComplet, $listeFormations);

