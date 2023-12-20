<h1> Exercice 8 </h1>

<p> Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran. </p>

<h2> Resultat </h2>

<!-- <img src="exo8.jpg" alt="photo de chien">
<img src="exo8.jpg" alt="photo de chien">
<img src="exo8.jpg" alt="photo de chien">
<img src="exo8.jpg" alt="photo de chien">
 -->

<?php

$nbBoucle=4;

for($i = 1; $i <=$nbBoucle; $i++) {
    echo "<img src='exo8.jpg' >";
}

// echo str_repeat("<img src='exo8.jpg'>", 10);