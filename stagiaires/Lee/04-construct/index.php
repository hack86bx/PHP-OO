<?php
session_start();
require_once "PersoClass02.php";

// $perso02A = new PersoClass02('Lee');

// var_dump($perso02A);

if (isset($_POST["username"], $_POST["espece"])) {
    $perso = new PersoClass02($_POST["username"], $_POST["espece"]);
    $_SESSION["Perso"][] = serialize($perso);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Creation</title>
</head>
<body>
    <h1>Player Creation</h1>
    <form action="" method="POST" name='perso'>
        <input type="text" name="username" placeholder="Your Name" required><br>
        Votre espece : 
        <select name="espece" required>
            <?php
            foreach (PersoClass02::ESPECE_CHOICE as $item) :
            ?>
            <option value="<?=$item?>"><?=$item?></option>
            <?php
            endforeach;
            ?>
        </select>
        <button type="submit">Create</button>
        
        <?php
 var_dump($_SESSION);
 $i=0;
 foreach ($_SESSION["Perso"] as $item) {
    var_dump(unserialize($item));
    $i++;
        ?>

        <?php
}
        ?>
    </form>
</body>
</html>