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
    public function __construct(string $name, int $age, string $espece, int|string $magPoint, string $magieType){
        // on garde le constructeur du parent
        parent::__construct($name,$age,$espece,$magPoint, $magieType);
        // on ajoute ce que l'on souhaite au constructeur de l'enfant
        # création du setter et appel ici
        $this->setMagieType($magieType); // à remplacer !
        #$this->setMagieType($magieType);
    }

    public function setMagieType($magieType) {
        if(in_array($magieType, self::MAGIE_NOIRE)){
            $this->magieType = $magieType;
        }else{
            var_dump(self::MAGIE_NOIRE);
            throw new Exception("MagieType doit être dans la list ci-dessus : ",360);
        }
    }
}