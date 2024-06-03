<?php

class PersoClasse02{
    // Propriétés
    protected string $name;        // protected si, dans le doute on veut avoir des héritiers
    protected int $hp;
    protected int $level= 1;
    protected string $espece;
    

    // Constantes
    public const DE_DE_6 = 6;
    public const  ESPECE_CHOICE = ["Humain",  
                                    "Sorcier",
                                    "Elfe",
                                    "Nain"];

    // Méthodes

        // Constructeur
        /* est une méthode magique qui permet lors de l'instanciation (avec le mot clé new) de passer des paramètres
         directement à l'instance de classe*/
        public function __construct(string $nom, string $espece )
        {
            // Modification sans vérification de la propriété
            $this->name = $nom;
            // modification grâce à un setteur (bonne pratique)
            $this->setEspece($espece);
        }


        // SETTER de espèce
        public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                $this->espece = $espece;
            }else{
                throw new Exception("Espèces inconnu");
            }
        }
}