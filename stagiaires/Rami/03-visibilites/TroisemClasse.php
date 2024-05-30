<?php
class PersoClass01{

        //Propriétés (Généralment private ou protected, ou parfois en pubblic
        //readonly(+rare))
        //ceci est un example, mais on ne peut donner  de valeur par défaut ni oublier le type (PHP >=8.1) !
        //public readonly string  $name;
        private $nom;

        private bool $vivant=true; 

        // Constantes
        public const ESPECES = "Humain";

        public function getNom(){
            return $this->nom;
        }

        public function setNom(string $name){
            if(strlen($name)>2){
            $this->nom =$name;
        }else{
            throw new Exception("Nom trop court");
        }


    }
}