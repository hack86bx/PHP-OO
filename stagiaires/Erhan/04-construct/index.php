<?php
session_start();

require_once "PersoClass02.php";

$perso = "Pas encore de Perso";

if(isset($_POST['username'], $_POST['espece'])){
    $perso = new PersoClass02($_POST['username'], $_POST['espece']);    
}

/*$perso02A = new PersoClass02("Erhan");

echo PersoClass02::DE_DE_6;

var_dump($perso02A);
*/
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un personnage</title>
 </head>
 <body>
    <h1>Création d'un personnage</h1>
    <form action="" method="post" name="perso">
        <input type="text" name="username" placeholder="Votre nom" required><br>
        Votre espèce:
        <select name="espece" required>
        <?php
        foreach(PersoClass02::ESPECE_CHOICE as $item):
        ?>
        <option value="<?=$item?>"><?=$item?></option>
        <?php
            endforeach;
        ?>
        </select>
        <input type="submit" value="Créer votre personnage">
    </form>
    <?php
        var_dump($perso);
    ?>
 </body>
 </html>