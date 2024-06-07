<?php

class PersOOnReal extends PersOOn {
  protected ?int $strength;
  protected ?int $ability;
  protected ?int $speed;

  // the hp value for each species
  public const SPECIES_HP = [
    "Humain"=>100,
    "Elfe"=>120,
    "Nain"=>60,
    "Orc"=>170,
    "Hobbit"=>70,
    "Gobelin"=>50,
  ];

  public function __construct(string $species, string $name, ?int $xp, null|bool|int $hp) {
    parent::__construct($species, $name, $xp, $hp);
    $this->hp = self::SPECIES_HP[$species];
  }

  public function throw_dice(int $dice_type=self::SMALL_DICE, int $nb_times=1):array {
    // get the number of faces of the dice
    if ($dice_type === self::SMALL_DICE){
      $dice = self::THROW_DICE_SMALL;
    }elseif ($dice_type === self::BIG_DICE){
      $dice = self::THROW_DICE_BIG;
    }else {
      throw Exception("dice type not valid");
    }

    $arr = [];
    for ($i=0;$i<$nb_times;$i++){
      $dice_result = rand(1, $dice);
      array_push($arr, $dice_result);
    }

    return $arr;
  }

  // getters
  public function getStrength():?int {
    return $this->strength;
  }
  public function getAbility():?int {
    return $this->ability;
  }
  public function getSpeed():?int {
    return $this->speed;
  }

  // setters
  public function setStrength(int $strength):PersOOnReal {
    $this->speed = $strength;
    return $this;
  }
  public function setAbility(int $ability):PersOOnReal {
    $this->speed = $ability;
    return $this;
  }
  public function setSpeed(int $speed):PersOOnReal {
    $this->speed = $speed;
    return $this;
  }
}
