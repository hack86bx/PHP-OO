<?php

class PersoMagicienNoire extends PersoMagicien{
    // Propriétés (non héritées) - ajout
    # créer un getter et un setter
    protected ?string $magieType;

    // Propriétés écrasées (public ou protégées) - remplacement
    protected int $force = 60;

    // On ne peut pas l'écraser une propriété privée du parent !
    // public int|bool|null $alive = 5;

    // constantes

    // $magieType ne peut être que
    public const MAGIE_NOIRE = ["Nécromancien","Voodoo"];

    // méthodes

    // Surcharge du constructeur on peut ajouter des éléments
    public function __construct(string $name, int $age, string $espece, string $magieType="Voodoo"){
        // on garde le constructeur du parent
        parent::__construct($name,$age,$espece);
        // on ajoute ce que l'on souhaite au constructeur de l'enfant
        # création du setter et appel ici
        $this->magieType = $magieType; // à remplacer !
        #$this->setMagieType($magieType);
    }

    
}