<?php

class PersoClass02 {
    // Properties
    protected string $name;
    protected int $hp;
    protected int $level = 1;
    protected string $espece;


    // Constants
    public const DE_DE_6 = 6;
    public const ESPECE_CHOICE = ["Humain", 
                                     "Elfe", 
                                     "Orc",
                                     "Nain",
                                    ];
    // Method

    public function __construct(string $nom, string $espece) 
    {
        $this->name = $nom;
        $this->espece = $espece;
    }
}