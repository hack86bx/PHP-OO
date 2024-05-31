<?php

class PersOOn {
    //propriétés -> variables
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnag, peut être null ou int (?int)
    //equivalent despuis PHP 8.0 : protected null|int $xpPerso;
    protected null|bool|string|int $hpPerso; //si plus de 2 types, utilisation des pipes (|)
    
}