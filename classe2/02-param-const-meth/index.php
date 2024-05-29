<?php
require_once "SecondeClasse.php";
$instance1 = new SecondeClasse();
 var_dump($instance1);

 ?>
 <h4>Affichage d'un paramètre par une méthode publique</h4>
 <?php
// utilisation d'une methode publique pour afficer un parametre (qui en principe ne sera pas publique) ->getter
 echo $instance1 ->getParam2()."<br>";
 //comme le parametre est publique, on peul l'afficher sans passer par un getter
 echo $instance1 ->param2;
 ?>
 <h4>Affichage d'un paramètre  publique</h4>
 echo $instance1 ->param2;  
 <?php
 ?>


 <h4>danger d'un parametre publique</h4>
 <p>comme il est publique, on va pouvoir le modifier en dehors de la classe</p><br>
 <?php
 $instance1 ->param2 = "aurevoire";
 echo $instance1->param2;


 