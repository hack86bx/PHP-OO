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





        private function estVivante(): string
        {
            if($this->vivant === true){
                return " et est vivant.";
            }else{
                return " et est décédé.";
            }
        }

        public function infoPerso(){
        if(is_null($this->nom)){
            //$this->nom = "Anonyme";
            //ou
            $this->setNom("Anonyme");
        }
        
            return $this->nom. " est ".
            self::ESPECES.
            $this->estVivante();
        }

}