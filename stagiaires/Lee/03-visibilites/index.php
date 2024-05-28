<?php

require_once ("PersoClass01.php");

$perso01 = new PersoClass01();
$perso02 = new PersoClass01();
$perso03 = new PersoClass01;

echo PersoClass01::ESPECES;


echo $perso01->getNom();

$perso01->setNom("Lee");
$perso02->setNom("Joe");
echo $perso01->getNom();
echo $perso01->getVivant();
$perso02->setVivant(false);
echo ("<br><br><br>");
// calling on a private method from outside is forbidden
// echo $perso02->estVivant();
 echo $perso01->infoPerso();
 echo '<br>';
 echo $perso02->infoPerso();
 echo '<br>';
 echo $perso03->infoPerso();
 echo '<br>';

var_dump($perso01, $perso02, $perso03);