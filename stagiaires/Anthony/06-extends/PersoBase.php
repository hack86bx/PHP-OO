<?php

class PersoBase{

    // Propriétés
 
    protected int $force = 100;
   
    protected int $agilite = 100;
    protected string $name;   // typage en string 
    protected ?int $hp;      // typage en null ou int (pourrait rester vide à la création)
    protected int $age;      // typage en int 
    protected int $xp = 0;   // typage en  int avec valeur par défaut
    protected ?int $level;   // typage en int ou null 
    protected string $espece;
    private null|bool|int $alive; // depuis PHP 8.0 Union Types


    // Constantes 
    public const  ESPECE_CHOICE = ["Humain",  
                                    "Sorcier",
                                    "Elfe",
                                     "Nain"
                                    ];

    // Méthodes
    
         // Constructeur
         public function __construct( string $name, int $age, string $espece)
         {
            // $this->name = $name;
            $this->setName($name); //correcte
            $this->setAge($age); 
            $this->setEspece($espece);
            $this->setAlive(true);
         }

        public function __toString()
        {
            // self::class -> la classe ou est déclarée la méthode __toString
            //$this::class -> le nom de la classe qui a créé l'instance (objet)
                return self::class." ".$this::class." ".$this->getName();
    
        }


         // Getters - Accessors

          // getter de $force
          public function getForce(): int
          {
              return $this->force;
          }

           // getter de $agilité
         public function getAgilite(): int
         {
             return $this->agilite;
         }



         // getter de $name
         public function getName(): string
         {
             return $this->name;
         }

         // getter de $hp (int ou null)
         public function getHp(): ?int
         {
             return $this->hp;
         }
         // getter de $age (int)
         public function getAge(): int
         {
             return $this->age;
         }
         // getter de $xp (int)
         public function getXp(): int
         {
             return $this->xp;
         }
         // getter de $level (int ou null)
         public function getLevel(): ?int
         {
             return $this->level;
         }
         // getter de $espece (string)
         public function getEspece(): string
         {
             return $this->espece;
         }
         // getter de $alive (null, bool ou int) - si rien = null, si 0 = false, si 1 = true, si + de 1 = int
         public function getAlive(): null|bool|int
         {
            
             return $this->alive;
         }


         // Setters - Mutators
         // setter de force
         public function setForce(int $force): void{
            
            if(($force)<0){
                throw new Exception("Doit être un entier positif",341);
            }
            // si pas d'erreur 
            $this->force = $force;
         }

           // setter d'agilite
           public function setAgilite(int $agilite): void{
            
            if(($agilite)<0){
                throw new Exception("Doit être un entier positif",342);
            }
            // si pas d'erreur 
            $this->agilite = $agilite;
         }




         // Setter de $name
         // le nom doit être protégé contre les espaces avant et arrière 
         // et ne peut contenir des tags, il doit également avoir plus de 2 caractères
         public function setName(string $thename){
            $thename = trim(strip_tags(($thename)));
            if(strlen($thename)<=2){
                throw new Exception("Nom trop court",333);
            }
            // si pas d'erreur 
            $this->name = $thename;
         }

        // setter de $hp (int) int positif uniquement, sinon erreur 335
        public function setHp(int $hp){
            $hp = trim(strip_tags(($hp)));
            if($hp<0){
                throw new Exception("Hp doit être positif",335);
            }
            // si pas d'erreur 
            $this->hp = $hp;
         }
         // setter de $age (int) doit être plus grand que 12 sinon erreur 336
         public function setAge(int $age){
            $age = trim(strip_tags(($age)));
            if($age <=12){
                throw new Exception("Trop jeune",336);
            }
            // si pas d'erreur 
            $this->age = $age;
         }
         // setter de $xp (int) seulement un entier positif sinon erreur 337
         public function setXp(int $xp){
            $xp = trim(strip_tags(($xp)));
            if($xp<0){
                throw new Exception("Xp doit être positif",337);
            }
            // si pas d'erreur 
            $this->xp = $xp;
         }
         // setter de $level (int) seulement un entier positif sinon erreur 338
         public function setLevel(int $level){
            $level = trim(strip_tags(($level)));
            if($level<0){
                throw new Exception("Level doit être positif",338);
            }
            // si pas d'erreur 
            $this->level = $level;
         }
       

         // setter de $alive (null, bool ou int) - si rien = null, si 0 = false, si 1 = true, si + de 1 = int

         public function setAlive(int|bool|null $alive){
           
       
            if(is_null($alive)){
                $this->alive = null;
            }else if($alive === 0){
                $this->alive = false;
            }else if($alive === 1){
                $this->alive = true;
            }else{
                
            $this->alive = $alive;
            }
            
         }

         // setter de espece
         public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                $this->espece = $espece;
            }else{
                throw new Exception("Espèces inconnu",334);
            }
        }

        // tous les personnages peuvent avancer
        public function persoAvance(){
            return "Le personnage {$this} avance";
        }

}

