<?php
class PersoClasse2 extends PersoClasse2Abstract{

    // surcharge du constructeur
    public function __construct(string $name, string $espece)
    {
        // on appelle le constructeur du parent
        parent::__construct($name, $espece);
        // on initialise le personnage
        $this->initPerso();
    }
    
    // Méthode abstract dans le parent DOIT être implémenté
    // dans les enfants
    protected function initPerso(){
        // on initialise les HP
        $this->initHP($this->getPersoEspece());
        // on initialise les Ability
        $this->initAbility($this->getPersoEspece());
        // on initialise les Strength
        $this->initStrength($this->getPersoEspece());
        // on initialise les Speed
        $this->initSpeed($this->getPersoEspece());
    }
    // À compléter
    // on peut changer la visibilité dans les enfants
    public function lanceDes(string $size, int $nb=1): int
    {
    // on choisit la valeur du dé (6 ou 20)
    $value = $size === "small" ? self::THROW_DICE_SMALL : self::THROW_DICE_BIG;
    // on récupère le texte actuel du personnage
    $texte = $this->getInfoPerso();
    // on initialise le résultat
    $result = 0;
    // on ajoute le texte de lancement
    $texte .= "<p><b>" . ($nb > 0 ? "Ajout de $nb" : "Retrait de " . abs($nb)) . " dés de $value : </b></p>";
    // on lance les dés
    for($i = 1; $i <= abs($nb); $i++){
        // Etat de chaque dé
        $lance = mt_rand(1, $value);
        // on ajoute ou retire le résultat
        $result += $nb > 0 ? $lance : - $lance;
        $texte .= "<p>Résultat du dé n°$i : $lance / $value</p>";
    }
    // résultat final du lancé de dés
    $texte .= "<p>Résultat final des dés : <b>$result</b></p>";
    // mise à jour du texte
    $this->setInfoPerso($texte);
    // on retourne le résultat
    return $result;
}

    protected function initHP(string $espece)
    {
        // on récupère les valeurs de base
        $hp = $this->getPersoHP();
        // on récupère le texte actuel du personnage
        $texte = $this->getInfoPerso();
        // on initialise le texte
        $texte .= "<h4>Initialisation des HP : $hp</h4>";
        $this->setInfoPerso($texte);
        // on récupère les valeurs de base pour cette espèce
        $pourDes = self::ESPECE_PERSO[$espece]["HP"];
        //var_dump($pourDes);
        // Pour chaque clef (small, big) présente dans la constante on lance les dés
        foreach (["small", "big"] as $size) {
            if (isset($pourDes[$size])) {
                $hp += $this->lanceDes($size, $pourDes[$size]);
                $texte = $this->getInfoPerso();
                $texte .= "<p><b>HP après lancer de dés : $hp</b></p>";
            }
        }
        // on met à jour les HP
        $this->setPersoHP($hp);
        // on met à jour le texte
        $this->setInfoPerso($texte);
    }

    protected function initAbility(string $espece)
    {
        // on récupère les valeurs de base
        $ability = $this->getPersoAbility();
        // on récupère le texte actuel du personnage
        $texte = $this->getInfoPerso();
        // on initialise le texte
        $texte .= "<h4>Initialisation des Ability : $ability</h4>";
        $this->setInfoPerso($texte);
        // on récupère les valeurs de base pour cette espèce
        $pourDes = self::ESPECE_PERSO[$espece]["Ability"];
        // Pour chaque clef (small, big) présente dans la constante on lance les dés
        foreach (["small", "big"] as $size) {
            if (isset($pourDes[$size])) {
                $ability += $this->lanceDes($size, $pourDes[$size]);
                $texte = $this->getInfoPerso();
                $texte .= "<p><b>Ability après lancer de dés : $ability</b></p>";
            }
        }
        // on met à jour les Ability
        $this->setPersoAbility($ability);
        // on met à jour le texte
        $this->setInfoPerso($texte);
    }

    protected function initStrength(string $espece)
    {
        // on récupère les valeurs de base
        $strength = $this->getPersoStrength();
        // on récupère le texte actuel du personnage
        $texte = $this->getInfoPerso();
        // on initialise le texte
        $texte .= "<h4>Initialisation des Strength : $strength</h4>";
        $this->setInfoPerso($texte);
        // on récupère les valeurs de base pour cette espèce
        $pourDes = self::ESPECE_PERSO[$espece]["Strength"];
        // Pour chaque clef (small, big) présente dans la constante on lance les dés
        foreach (["small", "big"] as $size) {
            if (isset($pourDes[$size])) {
                $strength += $this->lanceDes($size, $pourDes[$size]);
                $texte = $this->getInfoPerso();
                $texte .= "<p><b>Strength après lancer de dés : $strength</b></p>";
            }
        }
        // on met à jour les Strength
        $this->setPersoStrength($strength);
        // on met à jour le texte
        $this->setInfoPerso($texte);
    }

    protected function initSpeed(string $espece)
    {
        // on récupère les valeurs de base
        $speed = $this->getPersoSpeed();
        // on récupère le texte actuel du personnage
        $texte = $this->getInfoPerso();
        // on initialise le texte
        $texte .= "<h4>Initialisation des Speed : $speed</h4>";
        $this->setInfoPerso($texte);
        // on récupère les valeurs de base pour cette espèce
        $pourDes = self::ESPECE_PERSO[$espece]["Speed"];
        // Pour chaque clef (small, big) présente dans la constante on lance les dés
        foreach (["small", "big"] as $size) {
            if (isset($pourDes[$size])) {
                $speed += $this->lanceDes($size, $pourDes[$size]);
                $texte = $this->getInfoPerso();
                $texte .= "<p><b>Speed après lancer de dés : $speed</b></p>";
            }
        }
        // on met à jour les Speed
        $this->setPersoSpeed($speed);
        // on met à jour le texte
        $this->setInfoPerso($texte);
    }

}