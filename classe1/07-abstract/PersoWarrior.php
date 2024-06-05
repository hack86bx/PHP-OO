<?php

class PersoWarrior extends PersoAbstract{

    // Propriétés d'un guerrier
    protected int $strength = 100;
    protected int $resistance = 100;
    protected int $agility = 80;

    // on a hérité du constructeur de PersoAbstract, on va le surcharger

    public function __construct(string $theName, string $theEspece)
    {
        // vient de la classe parente (PersoAbstract)
        parent::__construct($theName,$theEspece);

        // surcharge
        $strength = $this->getStrength();
        foreach (self::throwSmallDice(3) as $key => $value)
        $this->setStrength($strength += );
        $resistance = $this->getResistance();
        $this->setResistance($resistance += self::throwSmallDice(3));
        $agility = $this->getAgility();
        $this->setAgility($agility += self::throwSmallDice(2));
        
    }

    /*
    Actions
    */
    /**
     * @throws \Random\RandomException
     */
    public function attack($enemy): string
    {

        // ATTAQUE
        $attackPoints = $this->getAgility();
        $text = "<p>Attaque de {$this->getName()} : Agilité = $attackPoints<br>";
        // lancé de 3 dés de 20
        $throwDices = $this->throwBigDice(3);
        $text .= "3 Dés de 20 faces : ";
        foreach ($throwDices as $key => $value){
            $attackPoints += $value;
            $text .= "dés $key = $value - ";
        }
        $text .= "<br> Points d'attaques de {$this->getName()} : $attackPoints<br>";


        // défense de l'ennemi
        $defenseEnemy = $enemy->defence();

        if($attackPoints>$defenseEnemy["points"]){
            $wound = ($attackPoints - $defenseEnemy["points"]) + ($this->getStrength()-$enemy->getStrength());
            $healtEnemy = $this->getHealthPoint() - $wound;
            $enemy->setHealthPoint($healtEnemy);
            return " {$this->getName()} a blessé {$enemy->getName()}";
        }

    }

    // notre défense
    public function defence(): array
    {
        // DEFENCE
        $defencePoints = $this->getAgility();
        $text = "<p>Défense de {$this->getName()} : Agilité = $defencePoints<br>";
        // lancé de 3 dés de 20
        $throwDices = $this->throwBigDice(3);
        $text .= "3 Dés de 20 faces : ";
        foreach ($throwDices as $key => $value){
            $defencePoints += $value;
            $text .= "dés $key = $value - ";
        }
        $text .= "<br> Points de défense de {$this->getName()} : $defencePoints";
        return(["points"=>$defencePoints, "texte"=>$text]);
    }

    public function getHealthPoint(): int
    {
        return $this->healthPoint;
    }

    public function setHealthPoint(int $health){
        $this->healthPoint = $health;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    


    public function getStrength() : int
    {
        return $this->strength;
    }

    protected function setStrength(int $strength)
    {
        $this->strength = $strength;
    }

    public function getResistance(): int
    {
        return $this->resistance;
    }


    protected function setResistance(int $resistance)
    {
        $this->resistance = $resistance;
    }

    public function getAgility(): int
    {
        return $this->agility;
    }

    protected function setAgility(int $agility)
    {
        $this->agility = $agility;
    }
}