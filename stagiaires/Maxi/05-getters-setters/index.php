<?php

require_once 'PersOOOn.php';

$perso1 = "pas encore";

// si on a cliqué sur  envoyer 

if (isset($_POST['especePerso'])) {
    try {
        $perso1 = new PersOOOn(species:$_POST['especePerso']); 
    } catch (Exception $e) {
        echo $e->getCode(). " ". $e->getMessage();
    }
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix d'un PersOOOn</title>
</head>
<body>
    <h1>Choix d'un PersOOOn</h1>
    <form action="" method="post" name="perso">
        <p>Utilisez un nom de min 3 et max 16 caractères</p>
        <input type="text" name="nomPerso" placeholder="Nom du personnage" required>
        <p>Selectionez votrez espèce</p>
        <select name="especePerso" id="">
            <option value="nimporte">nimporte</option>
            <?php
            // on peut facilement lire une constate public depuis la classe
            //sans devoir l'instancier avec son nom; puis ::, puis le nom de la cosntante
            foreach (PersOOOn::ESPECE_PERSO as $item):
            ?>
            <option value="<?= $item ?>"><?= $item ?></option>
            <?php
            endforeach;
            ?>
        </select>
        <input type="submit" value="Créer Personnage">
    </form>
    <?php
    var_dump($perso1);
    ?>
</body>
</html>
