<?php

require_once "PersOOOn.php";

$perso1 = "Pas encore de personnage";

// si on a cliqué sur envoyer
if(isset($_POST['especePerso'])){
    try{
        $perso1 = new PersOOOn(species2: $_POST['especePerso'], name: $_POST['nomPerso']);
        $isKevin = strtolower($perso1->getNomPerso()) === 'kevin';
        $perso1->setXpPerso($isKevin ? 999999999 : 1);
        $perso1->setHpPerso($isKevin ? 999999999 : 100);
    }catch(Exception $e){
        $error = [
            'code' => $e->getCode(),
            'message' => $e->getMessage()
        ];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix d'un PersOOOn</title>
    <style>
        #error-section{
            width: 350px; 
            border: 1px solid red; 
            text-align: center; 
            margin: 0 0 1rem 0; 
            box-shadow: 5px 5px 5px rgba(255,0,0,0.5);
            padding: .5rem;
        }

        input[type="submit"]{
            background-color: rgb(65, 167, 88);
            border: 1px solid rgb(65, 167, 88);
            border-radius: .5rem;
            color: white;
            padding: .5rem .5rem;
            cursor: pointer;
            transition: background-color .25s;
        }
        input[type="submit"]:hover{
            background-color: rgb(42, 137, 57);
        }

        .tips{
            display: block;
            margin-bottom: 10px;
        }

        label{
            display: block;
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    <h1>Choix d'un PersOOOn</h1>
    <?php if(isset($error)) : ?>
        <div id="error-section">
            <h3 style="color: red">Une erreur s'est produite : </h3>
            <p>Code d'erreur : <span style="color: red"><?= $error['code'] ?></span></p>
            <p>Message d'erreur :</p>
            <p style="color: red"><?= $error['message'] ?></p>
        </div>
    <?php endif ?>
    <form action="" method="POST" name="perso">
        <i class="tips"><span style="color: red">*</span> Utilisez un nom de minimum 3 et maximum 16 caractères.</i>
        <div>
            <label for="nomPerso">Nom du persOOOn : </label>
            <input type="text" name="nomPerso" placeholder="Nom du persOOOn" id="nomPerso" required>
        </div>
        <br>
        <i class="tips"><span style="color: red">*</span> L'espèce ne doit pas être Unknown.</i>
        <div>
            <label for="especePerso">Espèce du persOOOn : </label>
            
            <select name="especePerso" id="especePerso">
                <option value="nimporte">Unknown</option>
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
        </div>
        <br>
        <input type="submit" value="Créer le personnage" />
    </form>
    <h3>Données du tableau $_POST : </h3>
    <?php var_dump($_POST); ?>
    <h3>Données du personnage crée : </h3>
    <?php var_dump($perso1); ?>
</body>
</html>
