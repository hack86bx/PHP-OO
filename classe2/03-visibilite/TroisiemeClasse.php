<?php
class TroisiemeClasse{
    /*
    Paramètres

    public = peut être lue/modifiée en dehors 
     de la classe (et dedans, ainsi que dans les héritiers)

    protected = ne peut être lue/modifiée en dehors 
    de la classe, mais peut l'être dans la classe et 
    ses enfants

    private = ne peut être lue/modifiée en dehors 
    de la classe, mais peut l'être dans la classe elle-même

    Les bonnes pratiques font que les paramètres sont généralement en private (si il est inutile d'hériter cette classe) ou protected (si on veut hériter, ou utile d'hériter)
    */

    public $param1 = "un";
    private $param2 = "deux";
    protected $param3 = "trois";
    // à partir de PHP 8.1 on peut utiliser le readonly :
    // Il permet de pouvoir lire un paramètre public, sans pouvoir le modifier
    // il doit être déclaré avec son type, et ne peut avoir de valeur par défaut.
    public readonly int $param4;

    /*
    constantes
    */

    const CONST_1 = "yes";

    /*
    Méthodes
    */

    // fonction qui permet d'initialiser le $param4
    public function initParam4(){
        $this->param4 = 25;
    }

}