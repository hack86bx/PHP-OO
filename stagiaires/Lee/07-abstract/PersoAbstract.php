<?php


abstract class PersoAbstract {

// PROPERTIES



// CONSTS



// METHODS


}


class TestClass {

    protected int $force = 100;
    # créer les getters et setters (pas d'agilité négative)
    protected int $agilite = 100;
    protected string $name; // typage en string
    protected ?int $hp; // typage en null ou int (pourrait rester vide à la création)
    protected int $age; // typage en int
    protected int $xp=0;// typage en int avec valeur par défaut
    protected ?int $level; // int ou null
    protected string $espece;
    private null|bool|int $alive; // depuis PHP 8.0 Union types

    public function __construct(string $name, int $age, string $espece){$this->name = $name;$this->age = $age;$this->espece = $espece;}
	public function getName(): string {return $this->name;}

	public function getAge(): int {return $this->age;}

	public function getEspece(): string {return $this->espece;}

	public function setName(string $name): void {$this->name = $name;}

	public function setAge(int $age): void {$this->age = $age;}

	public function setEspece(string $espece): void {$this->espece = $espece;}

	
}