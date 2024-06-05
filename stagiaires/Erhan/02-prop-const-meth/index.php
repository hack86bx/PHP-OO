<?php

require_once "SecondeClass.php";

$instance1 = new SecondeClass();

var_dump($instance1);

?>

<h3>Propriétés publiques</h3>
<p>Elles sont rarement utilisées, car trop permissive (exception avec le readonly (on le verra plus tard)) </p>
<p>Le signe pour accéder aux propriétés publiques en dehors de l'instance est $instance->paramètreSansDollar</p>
<h4>On peut les lires depuis l'exterieur de l'instance</h4>
<code>echo $instance1->param2;</code>
<?php
echo $instance1->param2;
?>
<h4>On peut les modifier depuis l'exterieur de l'instance sans vérification !</h4>
<pre><code>$instance1->param1 = 25;
echo $instance1->param1;</code></pre><br>
<?php
$instance1->param1 = 25;
echo $instance1->param1;
?>
<h3>Constantes publiques</h3>
<p>On peut les afficher en dehors de l'instance avec ::</p>
<p>Attention c'est une mauvaise pratique (mais qui reste très utilisé), il vaut mieux partir de la classe</p>
<pre><code>
echo $instance1::CONSTANTE_1;
echo SecondeClass::CONSTANTE_1;
</code></pre>

<?php
echo $instance1::CONSTANTE_1;
echo "<br>";
echo SecondeClass::CONSTANTE_1;
?>
<h3>Méthods publiques</h3>
<p>Ces méthodes peuvent être appelées en dehors (comme en dedans) de l'instance avec l'opérateur -></p>
<pre><code>
$instance1->bonjourLesAmis();
</code></pre>
<?php
$instance1->bonjourLesAmis();
?><br>
<pre><code>echo $instance1->getParam2();</code></pre>
<?php

echo $instance1->getParam2();

