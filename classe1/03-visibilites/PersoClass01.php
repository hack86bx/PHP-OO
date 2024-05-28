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

        public function getVivant(): bool
        {
            return $this->vivant;
        }

        public function setVivant(bool $alive): void
        {
            $this->vivant = $alive;
        }


}