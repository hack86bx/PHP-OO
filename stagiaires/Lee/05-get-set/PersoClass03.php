<?php

class PersoClass03{

    protected string $name;
    protected ?int $hp;   // = null|int
    protected int $age;
    protected int $xp  = 0;
    protected int $lvl = 1;
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
        $this->name = $name;
        $this->age  = $age;
        $this->setEspece($espece);
    }                           
    
    // Getters (aka Accessors)
    public function getName(): string
    {
        return $this->name;
    }

    // Setters (aka Mutators)
    public function setEspece(string $espece)
    {
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    }
}