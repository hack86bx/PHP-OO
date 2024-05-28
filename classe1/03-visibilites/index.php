<?php

include "PersoClass01.php";

// instanciations
$perso01 = new PersoClass01();
$perso02 = new PersoClass01();

/* en privé, impossible de lire ou d'écrire un paramètre
echo $perso01->nom;
echo $perso01->vivant;
*/

// on peut lire une constante publique
echo PersoClass01::ESPECES;

/* On ne peut pas la modifier 
$perso01::ESPECES = 5;
ou
PersoClass01::ESPECES = 5;
*/
echo $perso01->getNom();

// utilisation d'un setter (modification)
$perso01->setNom("  <br>Michaël");

// utilisation d'un getter (affichage)
echo $perso01->getNom();

$perso02->setNom("Joe");

echo $perso01->getVivant();

$perso02->setVivant(false);

//$perso03 = $perso01;

//$perso03->setNom("Yep");

var_dump($perso01,$perso02);