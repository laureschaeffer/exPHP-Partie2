<h1> Exercice 11 </h1>

<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaine de caractère représentant une date. </p>

<h2> Resultat </h2>

<?php

// echo date('l d F Y'). '<br>';

$fmt = datefmt_create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);

$date= new DateTime();

echo $fmt->format($date);
