<?php

class SecondClass{

    /*

    propriété
    ce sont des variables (même règle de nommage)
    internes à la classe
    la visibilité par défaut est publique
    */

    public $param1; // propriété vide
    public $param2 = "coucou"; // propriété avec valeur par défaut
    public int $param3; // propriété typée
    public int|float $param4; // propriété multi-type(php8)
    public ? string $param5; // propriété multi-types (valide en php 7) null ou string
    
    

    /* 
    constantes
    ce sont des variables non modifiables qui doivent être initialisées avec leurs valeur. Les règles de nommage sont en UPPER_SNAKE_CASE 
    la variable par défaut est publique
    */

    const CONSTANTE_1 = "constante publique 1";
}