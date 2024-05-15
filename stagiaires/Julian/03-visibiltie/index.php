<?php

require_once 'TroisiemeClasse.php';


$instance1 = new TroisiemeClasse();


echo $instance1->param1."<br>";

//  Impossible d'afficher les parametre privee et protege

//  echo $instance1->param2."<br>";
//  echo $instance1->param3."<br>";

// modification possible du parametre public (probleme!)
$instance1->param1 = 255;
echo $instance1->param1."<br>";

// affichage d'une constant publique

echo $instance1::CONST_1."<br>"; // fonctionne mais mauvaise pratique, car il est conseille de partir de la classe et non de l'instance

echo TroisiemeClasse::CONST_1."<br>"; // bonne pratique
