<?php
//chargement d'un fichier contenant une classe
require_once "PremiereClasse.php";

// on peut instancier cette classe, en utilisant le mot clef new
$instance1 = new PremiereClasse();
$instance2 = new PremiereClasse();
//atention! $instance1 et $instance3 ne sont que des pointeurs vers l'objet créé avec le mot clef new, 
//c'est le meme objet
$instance3 = $instance1;

// il faudra cloner l'objet pour en avoir une copie exacte

//on visualise que $instance3 est identique à 
var_dump($instance1, $instance2, $instance3);

$array1 = [1,2,3,4,5];
//ceci suffit à cloner le tableau (chacun a un espace réservé en mémoire)
$array2 = $array1;
$array2[] = 6;
$array1[15] = "coucou";

// on visualise que les modifications d'un ne touchent pas l'autre

var_dump($array1,$array2);

