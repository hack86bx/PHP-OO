<?php

class PersoClass03{

    protected string $name;
    protected ?int $hp;   // = null|int
    protected int $age;
    protected int $xp  = 0;
    protected int $level;
    protected string $espece;
    private null|bool|int $alive;

 
    public const ESPECE_CHOICE = ["Humain", 
                                     "Elfe", 
                                     "Orc",
                                     "Nain",
                                    ];

    public function __construct(string $name, 
                                int $age, 
                                string $espece)  
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setEspece($espece);
        $this->setHp($espece);
        $this->setXp($age);
        $this->setLevel();
    }                           
    
    // Getters (aka Accessors)
    // get name
    public function getName(): string
    {
        return $this->name;
    }
    // get $age (int)
    public function getAge(): int
    {
        return $this->age;
    }
    // get $xp (int)
    public function getXp(): int
    {
        return $this->xp;
    }
    // get $level (int|null)
    public function getLevel(): ?int
    {
        return $this->level;
    }
    // get $alive ()
    public function getAlive(): null|bool|int
    {

        return $this->alive;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    // Setters (aka Mutators)

    public function setName(string $name) 
    {
        $name = trim(strip_tags($name));
        if(strlen($name) < 3) {
            throw new Exception("Name is too short", 333);
        }
        $this->name = $name;
    }

    public function setEspece(string $espece)
    {
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    }
    // set hp
    public function setHp ($espece)
    {
        $hp = 100;
        switch ($espece) {
            case "Humain" :
                $hp=$hp;
                break;
            case "Elfe" :
                $hp=$hp*0.75;
                break;
            case "Orc" :
                $hp=$hp*2;
                break;
            case "Nain" :
                $hp=$hp*1.5;
        }
        $this->hp = $hp;
    }
    // set age
    public function setAge ($age)
    {
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        if(intval($age) < 13) {
            throw new Exception("Trop jeune pour ce jeu", 336);
        }else {
            $this->age = $age;
        }
    }
    // set xp
    public function setXp()
    {
        $age=self::getAge();
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $xp = $age*100;
        if ($xp < 0) {
            throw new Exception('Xp too low',337);
        }
        $this->xp = $xp;
    }
    // set level
    public function setLevel ()
    {
        $xp=self::getXp();
        $this->level = $xp/200;
        

    }

    // set alive

    public function setAlive()
    {
        $hp= self::getHp();
        if ($hp <0) $this->alive = 0;
        
    }
}