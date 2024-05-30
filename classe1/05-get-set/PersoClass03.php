<?php
class PersoClass03{
    // Propriétés
    protected string $name; // typage en string
    protected ?int $hp; // typage en null ou int (pourrait rester vide à la création)
    protected int $age; // typage en int
    protected int $xp=0;// typage en int avec valeur par défaut
    protected ?int $level; // int ou null
    protected string $espece;
    private null|bool|int $alive; // depuis PHP 8.0 Union types

    // Constantes
    public const ESPECE_CHOICE = ["Humain",
                                     "Saiyan",
                                     "Elf",
                                     "Nain",
                                     "Cyborg",
                                    ];

    // Méthodes

        // constructeur
        public function __construct(string $name, int $age, string $espece){
            $this->name = $name;
            $this->age = $age;
            // modification grâce à un setter (BP)
            $this->setEspece($espece);
        }


        // Getters - Accessors

        // getters de $name
        public function getName(): string 
        {
            return $this->name;
        }

        // Setters - Mutators

        // Setter de espece
        public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                $this->espece = $espece;
            }else{
                throw new Exception("Tu fais quoi là!");
            }
        }

}