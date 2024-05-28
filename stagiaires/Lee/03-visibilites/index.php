<?php

require_once ("PersoClass01.php");

$perso01 = new PersoClass01();
$perso02 = new PersoClass01();

echo PersoClass01::ESPECES;


echo $perso01->getNom();

$perso01->setNom("Lee");

echo $perso01->getNom();
echo $perso01->getVivant();
$perso01->setVivant(true);
echo ("<br><br><br>");
// calling on a private method from outside is forbidden
// echo $perso02->estVivant();
 echo $perso01->infoPerso();


var_dump($perso01, $perso02);