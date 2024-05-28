<?php

require_once "PersoClass01.php";

//instanciation
$perso01 = new PersoClass01();
$perso02 = new PersoClass01();

/* en privé
echo $perso01->nom;
echo $perso01->vivant;
*/


echo PersoClass01::ESPECES;

echo $perso01->getNom();
$perso01->setNom(" <br>Erhann");
echo $perso01->getNom();
$perso02->setNom("Joe");


$perso01->setVivant(false);
echo $perso01->getVivant();

var_dump($perso01,$perso02);


