<?php

abstract class PersoAbstract{
    // propriétés héritables
    protected ?string $name;
    protected ?int $healthPoint;
    protected int $experience=0;

    // constantes
    public const ESPECE_CHOICE = [
        "Humain",
        "Saiyan",
        "Elf",
        "Nain",
        "Cyborg",
    ];

    // Méthodes

    // méthode __construct qui sera héritée
    public function __construct(string $theName)
    {
        // utilisation du setter pour le nom
        $this->setName($theName);
    }

    // méthode get qui sera héritée
    public function getName(): ?string
    {
        return $this->name;
    }

    // méthode set qui sera héritée (en fluent setters: retourne l'instance plutôt que du vide)
    public function setName(string $tName): self
    {
        // protection
        $ProtectedName = trim(strip_tags($tName));
        // nombre de caractères
        $nbName = strlen($ProtectedName);
        // si le nom est plus grand que 2 caractères et plus petit ou égal à 20 caractères
        if($nbName > 2 && $nbName <= 20){
            
            // on remplit le propriété avec la variable VERIFIEE
            $this->name = $ProtectedName;
            // on renvoie l'instance (fluent setting)
            return $this;
        }
        // si le nom n'est pas valide (else implicite via le return)
        throw new Exception("Nom non valide");
    }

    // méthodes abstraites, elle sont déclarées dans la classe abtraite, pour obliger 
    // les héritiers à redéclarer ces méthodes
    abstract public function setHealthPoint(int $health);
    abstract public function getHealthPoint(): ?int;

    abstract public function setExperience(int $exp);
    abstract public function getExperience(): int;

}