<?php
require_once "PersoClasse2Abstract.php";
// Nous sommes obligé d'appeler une classe enfant (non abstraite) de PersoClasse2Abstract.php
require_once "PersoClasse2.php";

$perso2 = "Pas encore de Personnage";


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract | classes abstraites</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
<h1>Abstract | classes abstraites</h1>
<p>Une classe abstraite est une classe qui ne peut pas être instanciée. Elle est utilisée pour définir des méthodes qui seront héritées par des classes enfants.</p>
<p>Une classe abstraite peut contenir des méthodes abstraites et des méthodes non abstraites.</p>
<p>Une méthode abstraite est une méthode qui n'a pas de corps. Elle est définie avec le mot clé abstract et ne peut pas être définie avec les mots clés private, protected ou final</p>
<pre><code>// impossible d'instancier la classe abstraite:
// $perso1 = new PersoClasse2Abstract();
$perso2 = new PersoClasse2("Luc","Humain"); // fonctionne</code></pre>
<h2>Choix d'un Personnage (enfant de la classe abstraite)</h2>
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
            <label for="nomPerso">Nom du personnage : </label>
            <input type="text" name="nomPerso" placeholder="Nom du personnage" id="nomPerso" required>
        </div>
        <br>
        <i class="tips"><span style="color: red">*</span> L'espèce ne doit pas être Unknown.</i>
        <div>
            <label for="especePerso">Espèce du personnage : </label>
            
            <select name="especePerso" id="especePerso">
                <option value="nimporte">Unknown</option>
                <?php
                    // on peut facilement lire une constante public depuis la classe
                    // sans devoir l'instancier avec sont nom, puis ::, puis le nom de la
                    // constante
                    foreach(PersoClasse2::ESPECE_PERSO as $key => $item):
                ?>
                <option value="<?=$key?>"><?=$key?></option>
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
<?php
// si on a cliqué sur envoyer
if(isset($_POST['especePerso'])){
    try{
        $perso2 = new PersoClasse2(espece: $_POST['especePerso'], name: $_POST['nomPerso']);

    }catch(Exception $e){
        $error = [
            'code' => $e->getCode(),
            'message' => $e->getMessage()
        ];
    }
}

if(is_object($perso2)){
   // echo $perso2->lanceDes("big",-3);
    echo "<h2>Personnage créé</h2>";
    echo "<h3>Initialisation du personnage</h3>";

    echo $perso2->getInfoPerso();
}



var_dump($perso2);
?>
</body>
</html>
