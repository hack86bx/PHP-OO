<?php 
require_once "PremierClass.php";

// on va istancier notre classe avec le mot de clef new

$instance1 = new PremiereClass; // parenthèses non obligatoire mais déconseillé

$instance2 = new PremiereClass(); //bonne pratique d'instanciation
?>
<h3>Création d'objet avec le mot clef new</h3>
<p>Une instance est créée avec le mot clef new, la variable ne contient pas réellement l'objet, ce n'est qu'un index vers l'objet en mémoire.</p>
<code>
        $instance3= $instance1; <br>
         // $instance3 n'est qu'un raccourci vers le même objet (= ne permet pas le clonage)
</code>
<?php
$instance3 = $instance1;
var_dump(
    $instance1, // premier objet de type PremierClass
    $instance2, // deuxieme objet (ou instance de classe) de type PremiereClasse
    $instance3, // ceci n'est qu'un lien vers l'instance numéro 1
 );