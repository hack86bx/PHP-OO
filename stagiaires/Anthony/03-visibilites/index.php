<?php

require_once "PersoClasse01.php";

// instanciation 
$perso01 = new PersoClasse01();
$perso02 = new PersoClasse01();

/* en privé, impossible de lire ou d'écrire un paramètre
echo $perso01->nom;
echo $perso01->vivant;*/


//on peut lire une constante publique

echo PersoClasse01::ESPECES;  //on ne peut pas la modifier

echo $perso01->getNom();


//utilisation d'un setteur (modification)
echo $perso01->setNom("Anthony");



// utilisation d'un guetteur (affichage)
echo $perso01->getNom();

echo $perso02->setNom("Olivia");



echo $perso01->getVivant();

$perso02->setVivant(false);

// Appel d'une méthode privée(ou protégé) depuis l'extérieur :  Interdit !
//$perso02->estVivante();
$perso03 = new PersoClasse01();
echo "<br>";
 echo $perso01->infoPerso();
 echo "<br>";
 echo $perso02->infoPerso();
 echo "<br>";
 echo $perso03->infoPerso();


var_dump($perso01,$perso02,$perso03);