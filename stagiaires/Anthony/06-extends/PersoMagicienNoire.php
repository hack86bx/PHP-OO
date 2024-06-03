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

    // getter de $magieType 
    public function getMagieType(): int
    {
    return $this->magieType;
    }   

    // setter de magieType
    public function setMagieType(null|string $magieType){
        if(in_array($magieType, self::MAGIE_NOIRE)){
            $this->magieType = $magieType;
        }else{
            throw new Exception("Type de magie inconnue",340);
        }
    }

    // Surcharge du constructeur on peut ajouter des éléments
    public function __construct(string $name, int $age, string $espece, int $magiePoint ,string $magieType="Voodoo"){
        // on garde le constructeur du parent
        parent::__construct($name,$age,$espece,$magiePoint,$magieType);
        // on ajoute ce que l'on souhaite au constructeur de l'enfant
        # création du setter et appel ici
       // $this->magieType = $magieType; // à remplacer !
        $this->setMagieType($magieType);
    }


    
}