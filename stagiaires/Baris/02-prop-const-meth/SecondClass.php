<?php

class SecondClass{

    /*
    Propriétés
    Ce sont des variables (même règle de nommage)
    internes à la classe
    La visibilité par défaut est publique
    */
    public $param1; // propriété vide
    public $param2 = "coucou"; // propriété avec valeur par défaut
    public int $param3; // propriété typée
    public int|float $param4; // propriété multi-type (PHP 8) int ou float
    public ?string $param5; // propriété multi-type (valide en PHP 7) null ou string

    /*
    Constantes
    Ce sont des variable non modifiables qui doivent être initialisées
    avec leur valeur. Les règles de nommage sont en UPPER_SNAKE_CASE
    La visibilité par défaut est publique
    */
    const CONSTANTE_1 = "constante publique 1";


}