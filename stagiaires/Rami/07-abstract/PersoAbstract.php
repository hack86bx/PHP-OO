<?php

abstract class PersoAbstract{
    //prop eritabili
  protected ?string $name;
  protected ?int $healthPoint;   
  protected ?int $experience;

  // const 

  public const ESPECE_CHOICE =  [
    "Humain",
    "Saiyan",
    "Elf",
    "Nain",
    "Cyborg",
                                ];
    //Metodi  
    
    // metodi construct che saranno eriditati
    public function __construct(string $thename)
    {
        
    }

 
   
  public function getName(): ?string
  {
    return $this->name;
  }

  
   
   
// metodo eriditato , ritorna l'istanza anzichè il nullo
   
  public function setName(string $tName) : self
  {
    $ProtectedName = trim( strip_tags($tName));
    // numero caratteri
    $nbName= strlen($ProtectedName);
    // si le nom è piu grande di 2 caratteri o piu piccolo oppure uguale a 20 caratteri
    if($nbName > 2 && $nbName <20)
    $this->name = $tName;

    return $this;
  }
}
