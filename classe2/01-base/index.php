<?php
// chargement d'un fichier contenant une classe
require_once "PremiereClasse.php";

// on peut instancier cette classe, en utilisant le mot clef new, elle se trouve dans une variable qui pointe vers l'object créé
$instance1 = new PremiereClasse(); // bonne pratique, ()
$instance2 = new PremiereClasse;
// ! $instance1 et $instance3 ne sont que des pointeurs vers l'objet créé avec le mot clef new, c'est donc le même objet !
$instance3 = $instance1;

var_dump($instance1,$instance2, $instance3);