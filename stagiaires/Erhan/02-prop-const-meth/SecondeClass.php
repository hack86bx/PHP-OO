<?php

class SecondeClass
{
    /*
    Propriétés 
    */
    public $param1;
    public $param2 = "coucou";
    public int $param3;
    public int|float $param4;
    public ?string $param5;
    //public readonly int $param6;


    /*
    Constantes
    */

    const CONSTANTE_1 = "constante publique 1";
    const CONSTANTE_2 = 4;

    /*
    Méthods
    */

    function bonjourLesAmis(){
        echo "Bonjour les ami.e.s";
    }

    // getter => renvoi le contenu d'un paramètre (qui ne serait en principe pas public), dans ce cas il DOIT être un string, sinon erreur fatale 
    public function getParam2(): string
    {
        //$this représente l'instance actuelle
        return $this->param2;
    }

}