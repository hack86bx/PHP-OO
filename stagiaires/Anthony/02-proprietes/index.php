<?php

require_once "SecondeClasse.php";

// instanciation d'un objet de type SecondeClasse
$instance1 = new SecondeClasse();

var_dump(
    $instance1,
);
?>
<h3>Propriétés publiques</h3>

<p>Elles sont rarement utilisées, car trop permissive (exception avec le readonly, à voir plus tard) </p>

<p>Le signe pour accéder aux propriétés publiques en dehors de l'instance est 
    $instance->paramètreSansDollar</p>

<h4>On peut les lire depuis l'extérieur de l'instance</h4>

<code>echo $instance1->param2;</code> <br>

<?php
echo $instance1->param2;
?>



<h4>On peut les modifier depuis l'extérieur de l'instance sans vérification</h4>

<code>$instance1->param1 = 25;
echo $instance1->param1;</code>

<?php
$instance1->param1 = 25;
echo $instance1->param1;
?>

<h3>Constantes publiques</h3>

<p>On peut les afficher en dehors de l'instance avec ::</p>
<p>Attention, c'est une mauvaise pratique (mais qui reste très utilisé),
    il vaut mieux partir de la classe</p>

    <code>echo $instance1::CONSTANTE_1; 
         echo SecondeClasse::CONSTANTE_1; <br>    
   </code>
   
 <?php
 echo $instance1::CONSTANTE_1;          // mauvaise pratique
 echo "<br>";
 echo SecondeClasse::CONSTANTE_1;       // bonne pratique   
 ?>

 <h3>Les méthodes publiques</h3>
 <p>Ces méthodes peuvent être appelés en dehors (comme en dedans)
    de l'instance avec l'opérateur ->
 </p>
  
 <code> $instance1->bonjourLesAmis();</code>
 <?php
 $instance1->bonjourLesAmis();          // affiche (donc mauvaise pratique)
?><br>
 <code> echo $instance1->getParam2(); </code>
<?php
echo $instance1->getParam2();           // getter valide


