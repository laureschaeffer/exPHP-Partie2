<h1> Exercice 13 </h1>

<p> Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus

des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule

instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un

véhicule.  </p>

<h2> Resultat </h2>

<?php

require "Voiture.php";


$v1= new Voiture("Peugeot", "408", 5);

$v1->demarrer();

$v1->accelerer(50);

 

$v2= new Voiture("Citroën", "C4", 3);

$v2->demarrer();

$v2->accelerer(70);


echo "Infos véhicule 1 <br> *************** <br>".$v1->getInfos();
echo "<br> <br>";
echo "Infos véhicule 2 <br> *************** <br>".$v2->getInfos();

 