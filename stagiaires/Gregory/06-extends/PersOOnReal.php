<?php

class PersOOnReal extends PersOOn {
  protected ?int $strength;
  protected ?int $ability;
  protected ?int $speed;

  // the stats for each species
  public const SPECIES_STATS = [
    "Humain"=>[
      "hp"=>100,
      "strength"=>120,
      "ability"=>130,
      "speed"=>120,
    ],
    "Elfe"=>[
      "hp"=>120,
      "strength"=>80,
      "ability"=>120,
      "speed"=>140,
    ],
    "Nain"=>[
      "hp"=>60,
      "strength"=>120,
      "ability"=>140,
      "speed"=>90,
    ],
    "Orc"=>[
      "hp"=>170,
      "strength"=>150,
      "ability"=>40,
      "speed"=>30,
    ],
    "Hobbit"=>[
      "hp"=>70,
      "strength"=>100,
      "ability"=>130,
      "speed"=>110,
    ],
    "Gobelin"=>[
      "hp"=>50,
      "strength"=>80,
      "ability"=>150,
      "speed"=>150,
    ],
  ];

  public function __construct(string $species, string $name, ?int $xp) {
    parent::__construct($species, $name, $xp);
    $this->hp = self::SPECIES_STATS[$species]["hp"];
    $this->strength = self::SPECIES_STATS[$species]["strength"];
    $this->ability = self::SPECIES_STATS[$species]["ability"];
    $this->speed = self::SPECIES_STATS[$species]["speed"];
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
  public function setStrength(int $strength):self {
    $this->speed = $strength;
    return $this;
  }
  public function setAbility(int $ability):self {
    $this->speed = $ability;
    return $this;
  }
  public function setSpeed(int $speed):self {
    $this->speed = $speed;
    return $this;
  }
}
