<?php
// Chargement du parent
require_once "PersoBase.php";
// chargement d'un enfant
require_once "PersoMagicien.php";

$persoBase = new PersoBase("Antho",22,"Sorcier");
$persoBase->setForce(125);
$persoBase->setAgilite(200);
echo "<p>Force :{$persoBase->getForce()} <br> Agilité : {$persoBase->getAgilite()}</p>";
$persoMagicien = new PersoMagicien("Lee",22,"Humain",300,"Noir");
//$persoMagicien->setAlive(true);

echo $persoBase->persoAvance();
echo "<br>";
echo $persoMagicien->persoAvance();

// la constante publique vient du parent, elle est héritée
var_dump(PersoMagicien::ESPECE_CHOICE);

var_dump($persoBase,$persoMagicien);
