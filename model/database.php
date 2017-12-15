<?php

function getAllLogements() : array {
    
$liste_logements[0] = [
    "titre" => "Gare sud",
    "prix" => 445000,
"image" => "property-01.jpg",
"dateCreation" => new DateTime("2017-06-12"),
"type" => "Appartement",
"taille" => 320,
"nb_chambre" => 2,
];


$liste_logements[1] = [
    "titre" => "Brequigny",
    "prix" => 220000,
"image" => "property-02.jpg",
"dateCreation" => new DateTime("2017-08-25"),
"type" => "Appartement",
"taille" => 250,
"nb_chambre" => 3,
];

$liste_logements[2] = [
    "titre" => "Vannes",
    "prix" => 90000,
"image" => "property-03.jpg",
"dateCreation" => new DateTime("2017-05-25"),
"type" => "Appartement",
"taille" => 100,
"nb_chambre" => 2,
];
$liste_logements[3] = [
    "titre" => "Bordeaux",
    "prix" => 420000,
"image" => "property-04.jpg",
"dateCreation" => new DateTime("2017-08-02"),
"type" => "Appartement",
"taille" => 250,
"nb_chambre" => 3,
];

$liste_logements[4] = [
    "titre" => "Paris",
    "prix" => 820000,
"image" => "property-05.jpg",
"dateCreation" => new DateTime("2017-10-25"),
"type" => "Maison",
"taille" => 200,
"nb_chambre" => 4,
];

return $liste_logements;
}