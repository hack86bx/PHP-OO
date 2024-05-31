<?php


class PersoClass01 {
//Properties
    // public readonly string $name; We'll be back to this later
    private $nom; // can only be read or modified from inside the class or instance of class)
    private bool $vivant = true;

// Constants
    public const ESPECES = 'Humain';

// METHODS
    // here is a public method that will permit reading of a private or protected property
    public function getNom() {
        return $this->nom;
    }

    // here is a public method that will permit the modification of a private or protected property
    public function setNom(string $name) {
        $name = strip_tags(trim($name));
        if(strlen($name) > 2) {
        $this->nom = $name;
        }else {
            throw new Exception("Name too short");
        }
    }

    public function getVivant() : bool {
        return $this->vivant;
    }

    public function setVivant(bool $alive) : void {
        $this->vivant = $alive;
    }

    // creation of a private method 
    private function estVivant() : string {
        if($this->vivant === true) {
            return " et est vivant.";
        }else {
            return " et est décédé.";
        }
    }

    // creation of a public method that will indicate all the info about the person
    public function infoPerso() {
        if(is_null($this->nom))  {
            $this->nom = "Unknown ";
        }
        return $this->nom." est un ".self::ESPECES.$this->estVivant();
    }

}