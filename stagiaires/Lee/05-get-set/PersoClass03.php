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
        return $this->level;
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
    public function setHp ()
    {

    }
    // set age
    public function setAge ($age)
    {
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        if(intval($age) < 13) {
            throw new Exception("Trop jeune pour ce jeu", 334);
        }else {
            $this->age = $age;
        }
    }
    // set xp
    public function setXp()
    {

    }
    // set level
    public function setLevel ()
    {

    }
}