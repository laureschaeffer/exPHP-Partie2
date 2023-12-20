<h1> Exercice 2 </h1>

<p> Soit le tableau suivant :
$capitales = array 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales) </p>

<h2> Resultat </h2>
<!-- fonctionnement d'un tableau en html
<table border=1>
    Tete du tableau
  <thead>
    <tr>
      <th> Pays</th>
      <th>Capitale </th>
    </tr>
  </thead>
  Corps du tableau
  <tbody>
  td*2 pour avoir deux lignes
    <tr>
        <td> France </td>
        <td> Paris </td>
    </tr>
    <tr> 
      <td> Allemagne </td>
      <td> Berlin </td>
    </tr>
    <tr>
        <td> Usa </td>
        <td> Washington </td>
    </tr>
    <tr>
        <td> Italie </td>
        <td> Rome </td>
    </tr>
  </tbody>
</table>  -->


<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Usa" => "Washington",
    "Italie" => "Rome",

];

ksort($capitales);

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    $result= "<table border=1>
                <thead>
                    <tr>
                        <th> Pays</th>
                        <th>Capitale </th>
                    </tr>
                </thead>
            <tbody>";
    foreach($capitales as $pays => $capitale){
        // le .= est pour rajouter des lignes, on concaténe
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)." </td>
                        <td> $capitale </td>
                    </tr>";
    }

    $result .= "</tbody> </table>";
    return $result;

}