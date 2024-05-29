<?php
class SecondeClasse{
    //paramètres - se sont les variables de notre classe
    //nous verrons la visibilité plus loin
    //nous les mettons en public par défault
    public $param1;
    public $param2 = "coucou";
    public int $param3; //on peut typer les paramètres (devrait!)

    /*
    Constantes
    Les constantes dovient etre initialisées avec leur valeur
    On doit utiliser le UPPER_CASE
*/
const CONST_1 = "blabla";
protected const CONST_2 =['1','2','3']; // possibilité de rendre une constante avec une autre visiblité
 
/*Metodes
Ce sont de fonctions internes à l'instance ou la classe 
*/
public function getParam2(){
    //renvoie le parametre 2 (pas de $), le $this represente l'instance (objet)
    return $this -> param2;
}
}