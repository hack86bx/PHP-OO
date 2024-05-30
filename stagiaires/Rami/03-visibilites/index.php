<?php
 include "TroisemClasse.php";

 $perso01 = new PersoClass01();

// pas correcte pas bonne maniere echo $perso01->nom;

echo PersoClass01::ESPECES;

echo $perso01->getNom();

$perso01->setNom("Rami");

var_dump($perso01);