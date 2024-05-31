<?php

require_once "PremiereClasse.php";

// Instanciation de la classe avec le mot de clé new

$instance1 = new PremiereClasse;   // Parenthèses non obligatoire, mais mauvaise pratique de ne pas les mettre
$instance2 = new PremiereClasse(); // Bonne pratique d'instanciation

?>
<h2>Création d'objet avec le mot clé new</h2>

<p>Une instanciation est créée avec le mot clé new, la variable ne contient pas réellement l'objet,
ce n'est qu'un index (ou pointeur) vers l'objet en mémoire.</p>

<code>
    $instance3 = $instance1;
    $instance3 n'est qu'un raccourci vers le même objet(ne permet pas le clonage)
</code>

<?php
$instance3 = $instance1;

var_dump(
    $instance1, // Premier objet de type PremiereClasse
    $instance2, // Deuxième objet (ou instance de classe) de type PremiereClasse
    $instance3, // Ceci n'est qu'un lien vers l'instance numéro 1
);

?>
