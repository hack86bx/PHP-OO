<?php

class  PersoClass01
{
    //Propriétés
        private $nom;
        private bool $vivant = true;

    // Constantes

        public const ESPECES = "Humain";
        

    //Méthodes
        public function getNom(){
            return $this->nom;
        }


        public function setNom(string $name){
            $name = strip_tags(trim($name));
            if(strlen($name)>2){
                $this->nom = $name;
            }else{
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