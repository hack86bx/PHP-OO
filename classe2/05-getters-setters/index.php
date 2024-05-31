<?php

require_once "PersOOOn.php";

$perso1 = "Pas encore de personnage";

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
    <form action="" method="POST" name="perso">
        <select name="especePerso">
            <option value="nimporte">nimporte</option>
            <?php
                // on peut facilement lire une constante public depuis la classe
                // sans devoir l'instancier avec sont nom, puis ::, puis le nom de la
                // constante
                foreach(PersOOOn::ESPECE_PERSO as $item):
            ?>
            <option value="<?=$item?>"><?=$item?></option>
            <?php
                endforeach;
            ?>
        </select>
        <input type="submit" value="Créer le personnage" />
    </form>
    <?php

    var_dump($_POST,$perso1);

?>
</body>
</html>
