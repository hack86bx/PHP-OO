<?php

class PersoWarrior extends PersoAbstract{
    
    public function getHealthPoint(): ?int 
    {
        return $this->healthPoint;
     }

     public function setHealthPoint( int $health){
        $this->healthPoint = $health;
     }

     public function getExperience(): int{
        return $this->experience;
     }

     public function setExperience(int $experience){
        $this->experience = $experience;
     }

     public function attack($enemy)
     {
        
     }
     public function defence($enemy)
     {
        
     }
     
}