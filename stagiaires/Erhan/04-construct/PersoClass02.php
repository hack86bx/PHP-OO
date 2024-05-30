<?php

class PersoClass02{
    // Propriétés
    protected string $name;
    protected int $hp;
    protected int $level = 1;
    protected string $espece;
    
    // Constantes
    public const DE_DE_6 = 6;
    public const ESPECE_CHOICE = ["Humain", 
                                     "Saiyan",   
                                     "Elf",
                                     "Nain",
                                     "Cyborg",
                                    ];

    //Méthodes

        //Le constructeur est une méthode magique
    public function __construct(string $nom, string $espece)
    {
        $this->name = $nom;
        $this->setEspece($espece);
    }

    //setter de espece
    public function setEspece(string $espece){
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    } 
}