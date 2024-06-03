<?php

class PersoClass03 {
    //Propriétés
    protected string $name;
    protected ?int $hp;
    protected int $age;
    protected int $xp = 0;
    protected ?int $level;
    protected string $espece;
    private null|bool|int $alive;


    //Constantes
    public const ESPECE_CHOICE = ["Humain", 
                                  "Saiyan",   
                                  "Elf",
                                  "Nain",
                                  "Cyborg",
                                ];

    //Méthodes

       //constructeur
    public function __construct(string $name, int $hp, int $age, int $xp, int $level, string $espece, null|bool|int $alive )
    {
    //$this->name = $name;
    $this->setName($name);
    $this->setHp($hp);
    $this->setAge($age);
    $this->setXp($xp);
    $this->setLevel($level);
    $this->setEspece($espece);
    $this->setAlive($alive);
    }    


       
    //Getters - Accessors

    //getters de $name
    public function getName(): string
    {
        return $this->name;
    }

    //getters de $hp
    public function getHp(): int|null
    {
        return $this->hp;
    }

    //getters de $age
    public function getAge(): int
    {
        return $this->age;
    }

    //getters de $xp
    public function getXp(): int
    {
        return $this->xp;
    }

    //getters de $level
    public function getLevel(): int|null
    {
        return $this->level;
    }

    //getters de $espece
    public function getEspece(): string
    {
        return $this->espece;
    }

    //getters de $alive
    public function getAlive(): int|bool|null
    {
        return $this->alive;
    }

       


    //Setters - Mutators
    
    //setter de name
    public function setName(string $thename){
        $thename = strip_tags(trim($thename));
        if(strlen($thename)<=2){
            throw new Exception("Nom trop court", 333);
        }
        $this->name = $thename;        
    } 

    //setter de hp
    public function setHp(int $hp){
        if($hp<=0){
            throw new Exception("int positif uniquement", 335);
        }
        $this->hp = $hp;        
    }

    //setter de age
    public function setAge(int $age){
        if($age<=12){
            throw new Exception("doit être plus grand que 12", 336);
        }
        $this->age = $age;        
    }

    //setter de xp
    public function setXp(int $xp){
        if($xp<=0){
            throw new Exception("seulement un entier positif", 337);
        }
        $this->xp = $xp;        
    }

    //setter de level
    public function setLevel(int $level){
        if($level<=0){
            throw new Exception("seulement un entier positif", 338);
        }
        $this->level = $level;        
    }


    //setter de espece
    public function setEspece(string $espece){
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    } 

    //setter de alive
    public function setAlive(string|bool|null|int $alive){
        if(is_null($alive)||is_string($alive)){
            $this->alive = null;
        }elseif($alive===0){
            $this->alive = false;
        }elseif($alive===1){
            $this->alive = true;
        }elseif($alive>1)
            $this->alive = $alive;        
    }
}