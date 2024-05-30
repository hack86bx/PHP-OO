<?php

class PersoClass02{
    // Propriétés 
    protected string $name; // protected si, dans le doute ou sciemment, on veut avoir des héritiers
    protected int $hp; 
    protected int $level=1;
    protected string $espece; 
    protected array $especeChoice = ["Humain",
                                     "Saiyan",
                                        "Elf",
                                       "Nain",
                                     "Cyborg"];
    // Constantes
    public const DE_DE_6 = 6;

    // méthodes

            // Le constructeur est une méthode magique qui permet lors de l'instanciation (avec le mot clef new) de passer des paramètres directement à l'instance de classe
            public function __construct(string $nom)
            {
                $this->name = $nom; 
            }

}