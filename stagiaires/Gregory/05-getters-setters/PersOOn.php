<?php

class PersOOn {
  private string $espece;
  private string $nom;
  protected ?int $xp;
  protected null|bool|int $hp;

  public const ESPECES = [
    "Humain",
    "Elfe",
    "Nain",
    "Orc",
    "Hobbit",
    "Gobelin",
  ];

  public function __construct(string $species): void {
    $this->setEspece($species);
  }

  public function setEspece(string $name): void {
    if (in_array($name, self::ESPECES)){
      $this->espece = $name;
    }else {
      throw new Exception("Espece invalide");
    }
  }

  public function getEspece(): string {
    return $this->espece;
  }
}
