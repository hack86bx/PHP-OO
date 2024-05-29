<?php
class SecondeClasse{
    /*Paramètres
    public = peut etre lue/modifiée en dehors (et dans) de la classe
    protected = ne peut etre lue/modifiée en dehors de la classe, mais peut l'etre dans la classe et ses enfants
    private = ne peut etre lue/modifiée en dehors de la classe, mais peut l'etre dans la classe elle meme
    Les bonne pratique font que les paramètres sont generalement en private ou protected 
    */
    public $param1 ="un";
    private $param2 = "deux";
    protected $param3 ="trois";
    
}