<?php

require_once "PersoClasse03.php";

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
    <p>Ce sont des méthodes publiques, qui permettent de récupérer des propriétées private ou protected (public également mais peu utilisé, 
        car peu sécurisé et inutile depuis PHP 8.1 grâce au readonly)</p>  
    <p>On les nommera comme les propriétés, en rajoutant get devant le nom mis en majuscule </p> 
    <pre><code>
    protected string $name; 
    protected ?int $hp; 
    <br>
    // Getters : <br>
    public function getName(): string
    {
        return $this->name;
    }

    public function getHp();

    $perso03A = new PersoClasse03("John",16,"Humain");

    // On peut  donc récupérer le nom avec 
    
    echo $perso03A->getName();
    </code></pre>   
    
    <?php
    try{
    $perso03A = new PersoClasse03("Johnny",16,"Humain");
    echo $perso03A->getName();
}catch(Exception $e){
    echo $e->getCode(). " ".$e->getMessage();
}
    ?>

    <?php
   
    var_dump($perso03A);

    // ici utiliser les setters 
    $perso03A->setName("Samy");
    $perso03A->setHp(20);
    $perso03A->setAge(13); 
    $perso03A->setXp(2);  
    $perso03A->setLevel(20);
    $perso03A->setAlive(0);

    // ici les getters pour afficher
     echo $perso03A->getName();
     echo $perso03A->getHp();
     echo $perso03A->getAge();
     echo $perso03A->getXp();
     echo $perso03A->getLevel();
     echo $perso03A->getAlive();
    var_dump($perso03A);
    ?>
</body>
</html>