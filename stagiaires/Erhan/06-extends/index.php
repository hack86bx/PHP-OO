<?php

require_once "PersoBase.php";
require_once "PersoMagicien.php";
require_once "PersoMagicienNoire.php";

$persoBase = new PersoBase("Erhan",47,"Nain");
$persoBase->setAlive(25);
$persoMagicien = new PersoMagicien("Pierre",22,"Cyborg","Noire");
$persoMagicien->setAlive(true);

echo $persoBase->persoAvance();
echo "<br>";
echo $persoMagicien ->persoAvance();

var_dump(PersoMagicien::ESPECE_CHOICE);

var_dump($persoBase, $persoMagicien);   