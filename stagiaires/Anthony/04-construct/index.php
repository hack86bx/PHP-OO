<?php

session_start();

require_once "PersoClasse02.php";

if(isset($_POST["username"],$_POST["espece"])){
    try{
        $perso = new PersoClasse02($_POST["username"],$_POST["espece"]);
       
    }catch(Exception $e){
        die($e->getMessage());
    }
    
   
}


/*$perso02A = new PersoClasse02("Antho");

echo PersoClasse02::DE_DE_6;

var_dump($perso02A);*/
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
    <form action="" method="POST" name="perso">
        <input type="text" name="username" placeholder="Votre nom" required><br>
        Votre espèces:
        <select name="espece" required>
        <?php
    foreach(PersoClasse02::ESPECE_CHOICE as $item):
        ?>
        <option value="<?=$item?>"><?=$item?></option>
        <?php
        endforeach;
        ?>
        </select>
        <br>
        <input type="submit" value="Créer votre personnage">
    </form>
    <?php
  var_dump($perso);
   
    ?>
</body>
</html>