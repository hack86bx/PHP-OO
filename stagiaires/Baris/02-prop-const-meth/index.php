<?php
require_once "SecondClass.php";

$instance1 = new SecondClass();

var_dump(
    $instance1,
);
?>
<h3>propriété publique</h3>
<p>Elles sont rarament utilisées, car trop permissives exeception avec le readonly (on le verr plus tard)</p>
<h4> on peut les lires depuis l'extérieur de l'instance </h4>
<code>
    echo $instance1->parm2;
</code>
<?php 
echo $instance1->param2;
?>
<h4> On peut modifier depuis l'extérieur de l'instance vers vérification : </h4>