<?php
require_once "PremiereClass.php";

// on va instancier notre classe avec le mot de clef new 
$instance1 = new PremiereClass; // parentheses non obligatoire mais deconseillé mauvaise pratique de ne pas les mettre 

$instance2 = new PremiereClass(); // bonne pratique d'instanciation

?>
<h3> creation d'objet avec le mot clef new </h3>
<p>une instanciation est cree avec le mot clef new, la variable ne contient pas reelement l'objet, ce n'est qu'un index (ou pointeur) vers l'objet en memoire.</p>
<code>
    $instance3 = $instance1
    $instance3 n'est qu'un raccourci vers le meme objet (= ne permet pas le clonage)
</code>

<?php

$instance3 = $instance1;

var_dump($instance1, // premier objet de type PremierClass
         $instance2, // deuxieme objet (ou instance de classe) de type PremierClass
         $instance3, // ceci n'est qu un lien vers l'instance numero 1
);