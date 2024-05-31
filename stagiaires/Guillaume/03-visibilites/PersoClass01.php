<?php

class PersoClass01 {

    // Propriétés (Généralement private ou protected, ou parfois en public readonly (+ rare))
        // ceci est un exemple de readonly, mais on ne peut donner de valeur par défaut ni oublier le type (PHP >= 8.1) !
        // public readonly string $name;
        private $nom; // ne peut être lue ou modifiée qu'à l'intérieur de cette classe (ou à l'intérieur de l'instance de cette classe)
        private bool $vivant = true; // on peut typer (bonne pratique) une propriété et lui donner une valeur par défaut

    // Constantes

        public const ESPECES = "Humain";

    // Méthodes

        // on va créer un méthode publique qui permet de récupérer une propriété privée (ou protégée)
        public function getNom(){
            // qui renvoie la propriété nom qui se trouve dans l'objet (instance) = $this
            return $this->nom;
        } 

        // on va créer une méthode publique qui permet de modifier une propriété privée (ou protégée), en utilisant (ou pas) ses paramètres
        public function setNom(string $name){
            // on traîte le nom (optionnel)
            $name = strip_tags(trim($name));
            // on veut que le nom ai plus de 2 caractères
            if(strlen($name)>2){
                // modification de la propriété privée $nom dans cette instance ($this)
                $this->nom = $name;
            }else{
                // On lance une exception
                throw new Exception("Nom trop court");
            }
        } 
        
        // GETTER
        public function getVivant(): bool
        {
            return $this->vivant;
        }
        // SETTER
        public function setVivant(bool $alive): void
        {
            $this->vivant = $alive;
        }

        // création d'une méthode privée, elle ne pourra être appelée que dans l'instance de la classe
        private function estVivante(): string
        {
            // on vérifie un paramètre (privé, mais on est dans l'instance de classe)
            if($this->vivant === true){
                return " et est vivant.";
            }else{
                return " et est décédé.";
            }
        }

        // création d'une méthode publique qui va indiquer toutes les infos sur le personnage
        public function infoPerso(){
            /*
            depuis une méthode publique on peut afficher
            $this->nom => une propriété privée ($this représente l'instance)
            self::ESPECES => une constante de la classe (self représente la classe)
            $this->estVivante() => une méthode privée
            */

            // si le nom n'a pas été défini par setNom()
            if(is_null($this->nom)){
                // on le met en anonyme
                // $this->nom = "Anonyme "; // mise à jour de la propriété
                //ou
                $this->setNom("Anonyme");
            }

            return $this->nom. " est ".
                            self::ESPECES.
                            $this->estVivante() ;
        }




}