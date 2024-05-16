<?php
require_once "SecondClass.php";

$instance1 = new SecondClass();

var_dump(
    $instance1,
);
?>
<h3>propriété publique</h3>
<p>Elles sont rarament utilisées, car trop permissives exeception avec le readonly (on le verra plus tard)</p>
<p> Le signe pour accéder aux propriétés publiques en dehors de l'instance est $instance-> paramètreSansDollar</p>
<h4> on peut les lires depuis l'extérieur de l'instance </h4>
<code>
    echo $instance1->parm2;
</code>
<?php 
echo $instance1->param2;
?>
<h4> On peut modifier depuis l'extérieur de l'instance sans vérification : </h4>
<code>$instance1->param = 25;
    echo $instance1->param;
</code><br>
<?php
$instance1->param1 = 25;
echo $instance1->param1;
?>
<h3>Constantes publiques</h3>
<p>On peut les afficher en dehors de l'instance avec :: </p>
<p>Attention c'est une mauvais pratique (mais qui est reste très utilisé), il vaut mieux partir de la classe</p>
<pre><code> 
