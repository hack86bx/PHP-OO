<?php

class PersoWarrior extends PersoAbstract{
    /**
     * Get the value of healthPoint
     */ 
    public function getHealthPoint()
    {
        return $this->healthPoint;
    }
    
    /**
     * Get the value of experience
     */ 
    public function getExperience()
    {
        return $this->experience;
    }


    /**
     * Set the value of healthPoint
     *
     * @return  self
     */ 
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;

        return $this;
    }


    

    /**
     * Set the value of experience
     *
     * @return  self
     */ 
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }
}