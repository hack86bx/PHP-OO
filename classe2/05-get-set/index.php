<?php
include_once "PersoClass03.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters et Setters</title>
</head>
<body>
    <h1>Getters et Setters</h1>
    <h2>Accessors ou Getters</h2>
    <p>Ce sont des méthodes publiques, qui permettent de récupérer des propriétées private ou protected (public également, mais peu utilisé car peu sécurisé, et inutile depuis PHP 8.1 grâce au readonly)</p>
    <p>On les nommera comme les propriétés, en rajoutant get devant le nom mis en majuscule</p>
    <pre><code>protected string $name;
protected ?int $hp;
    // getters:
public function getName(): string 
    {
        return $this->name;
    }
public function getHp();

$perso03A = new PersoClass03("Steve",16,"Humain");

// On peut récupérer le nom avec 

echo $perso03A->getName();

</code></pre>
<?php
try{
    $perso03A = new PersoClass03("  <br>  Samuel  <br> ",16,"Humain");
    echo $perso03A->getName();
}catch(Exception $e){
    echo $e->getCode(). " ".$e->getMessage();
}
?>

<?php

var_dump($perso03A);

// ici utiliser les setters pour modifier
$perso03A->setName("Medhi");
$perso03A->setEspece("Elf");

// ici les getters pour afficher
echo $perso03A->getName();

var_dump($perso03A);
?>
</body>
</html>