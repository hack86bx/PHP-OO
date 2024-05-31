<?php
class TroisiemeClasse{
    /*
    Paramètres

<<<<<<< HEAD
    public = peut être lue/modifiée en dehors la classe (et dedans, ainsi que dans dans les héritiers)
    
    private = ne peut être lue/modifiée en dehors de la classe, mais peut l'être dans la classe elle-même

    Les bonnes pratiques font que les paramêtres sont généralement en private (qi il est inutile d'hériter cette classe)
    ou protected (si on veut hériter, ou utile d'hériter)
    */


    public $param1 = "un" ;
    private $param2 = "deux" ;
    protected $param3 = "trois"
=======
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

    /*
    ICI
    */

    const CONST_1 = "yes";

>>>>>>> 3f5af90819072c0d279f88a8071de92b5034a593
}