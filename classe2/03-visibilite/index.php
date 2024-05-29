<?php
require_once "TroisiemeClasse.php";
$instance1 = new TroisiemeClasse();

// afichage du paramètre public
echo $instance1 -> param1."<br>";

//erreure fatale
echo $instance1 -> param2."<br>";
echo $instance1 -> param3."<br>";
