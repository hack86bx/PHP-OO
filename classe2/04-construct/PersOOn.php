<?php

class PersOOn {
    /*
     Propriétés -> variables
     */
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnage, peut être null ou int (?int)
    // équivalent depuis PHP 8.0 : protected null|int $xpPerso;
    protected null|bool|int $hpPerso; // si plus de 2 types, utilisation des pipes

    /*
    Constantes -> constantes
    */
    // Les espèces qui seront acceptées dans le jeu
    public const ESPECE_PERSO = [
        "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",
    ];
    
}