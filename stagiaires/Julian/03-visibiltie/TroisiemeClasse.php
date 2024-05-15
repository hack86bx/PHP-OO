<?php

class TroisiemeClasse {
    
    //Paramètres:
    //? public = peut etre lue/modifiee en dehors (et dedans, ainsi que dans les heritiers/enfants) de la classe
    //? protected = ne peut etre lue/modifiee en dehors de la classe, mais peut l'etre dans la classe et ses enfants
    //? private = ne peut etre lue/modifiee en dehors de la classe, mais peut l'etre dans la classe elle-meme
    
    // Les bonnes pratiques font que les parametres sont generalement en private (si il est inutile d'heritier cette classe)
    // ou protected (si on veut heritier, ou utile d'heritier)

    public $param1 = 'un';
    private $param2 = 'deux';
    protected $param3 = 'trois';
    
    
    const CONST_1 = 'yes';


}