<?php

class PersOOOReal extends PersOOOn{

    // on peut écraser une propriété du parent si protected ou public
    // ! si typé dans le parent, on doit garder le typage !
    protected ?int $xpPerso=20;
    // nouvelles propriétés
    // propriétées protégées
    protected ?int $force;
    protected ?int $habilete;
    protected ?int $vitesse;
    

    // on peut surcharger une méthode enfant
    public function __construct(string $species2, string $name)
        {
            // on récupère le constructeur du parent (PersOOOn) qui va donc être exécuté
            // lors de l'instanciation de PersOOOReal
            parent::__construct($species2,$name);
            // on ajoute nos besoins
            $this->initPerso();

        }

    /*
    
    Initialisation d'un personnage suivant son genre :
    "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",

        setHpPerso
        setForce
        setHabilite
        setVitesse
    */

    protected function initPerso(){
        switch($this->getEspecePerso()){
            case "Humain":

                break;
        }
    }

    /*

    Lancés de dés

    */
    public function lancePetitDes($nb = 1): array
    {
        $lance = array();
        for($i=1;$i<=$nb;$i++){
            $lance[$i] = mt_rand(1,self::THROW_DICE_SMALL);
        }

        return $lance;
    }

    public function lanceGrandDes($nb = 1): array
    {
        $lance = array();
        for($i=1;$i<=$nb;$i++){
            $lance[$i] = mt_rand(1,self::THROW_DICE_BIG);
        }

        return $lance;
    }

    /*
    GETTERS AND SETTERS
    */

    public function getForce():?int
    {
        return $this->force;
    }

    public function setForce(int $force):void
    {
        $this->force = $force;

    }

    public function getHabilete():?int
    {
        return $this->habilete;
    }

    public function setHabilete(int $habilete):void
    {
        $this->habilete = $habilete;
    }

    public function getVitesse():?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse)
    {
        $this->vitesse = $vitesse;
    }

}