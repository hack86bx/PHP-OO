<?php

include_once 'PersoClass03.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>
<body>
    <h1>Getters and Setters</h1>
    <h2>Accessor or Getters</h2>
    <p>These are public methods that allow the recuperation of private/protected properties (but are not used often as they are less secure (and not needed since PHP8.1's 'public readonly'))</p>
    <p>They are named after the property that they read with set before the name</p>
    <pre>
    <code>
        public function getName(): string 
        {
            return $this->name;
        };
        public function getHp();
    </code>
    </pre>

    <?php
        $perso03A = new PersoClass03("Steve", 40, "Humain");
    ?>


<?= $perso03A->getName(); ?>


<?php
var_dump($perso03A);
?>
</body>
</html>