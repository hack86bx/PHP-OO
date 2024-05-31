<?php

class PersOOOn {
    //propriétés -> variables
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnag, peut être null ou int (?int)
    //equivalent despuis PHP 8.0 : protected null|int $xpPerso;
    protected null|bool|string|int $hpPerso; //si plus de 2 types, utilisation des pipes (|)


    //constantes -> équivalent constantes
    //les especes que seront acceptéesdans le jeu
    public const ESPECE_PERSO = [
        "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",
    ];
    //methodes -> equivalent des fontcations

    //methode magique : constructeur
    //c'est une methode publice qui est appelée lors de l'instanciation de la classe donc l'utilisation du mot clé new.
    //Elle permet de passer des paramètres lors de la creation de la instance.
    public function __construct(string $species) {
        //on utiliser les setter pour remplir les paramètres 
        $this->setEspecePerso($species);

    }
    /*
    Setters (mutetors)
    ils permettent de modifier des proprietes quelque soit la visibilité (plus rare pour les publics, sauf avec readonly), tout en verifiant la validité des données reçues. Les setters sont toujours des méthodess publics (donc utilisables deuis l'exterieur de la classe et heritables)
    On les ecrit avec le mot clef 'set' suivi du nom de l'attribut mis en majuscule '$especePerso' devient 'setEspecePerso()'
    */

    /*regle mise en place pour modifier $especePerso*/

    public function setEspecePerso(string $species): void // void signifie que la fonction ne retourne rien (cette methode est une procedure)
    { 
        //si $especies se trouve dans la constante ESPECE_PERSO qui est un tableau (utilisation de in_array)
        //self represent la classe 
        if (in_array($species, self::ESPECE_PERSO)) {
            $this->especePerso = $species;
        } else {
            throw new Exception("Espèce inconnue!", 333);
        }
    }

}