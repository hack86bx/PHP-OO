<?php
class PersoClasse2 extends PersoClasse2Abstract{
    
    // Méthode abstract dans le parent DOIT être implémenté
    // dans les enfants
    protected function initPerso(){

    }
    // A compléter
    protected function lanceDes(string $size, int $nb=1){
    // on choisit la valeur du dé (6 ou 20)
    $value = $size === "small" ? self::THROW_DICE_SMALL : self::THROW_DICE_BIG;
    // on récupère le texte actuel du personnage
    $texte = $this->getInfoPerso();
    // on initialise le résultat
    $result = 0;
    // on ajoute le texte de lancement
    $texte .= "<p>" . ($nb > 0 ? "Ajout de $nb" : "Retrait de " . abs($nb)) . " dés de $value : </p>";
    // on lance les dés
    for($i = 1; $i <= abs($nb); $i++){
        // Etat de chaque dé
        $lance = mt_rand(1, $value);
        // on ajoute ou retire le résultat
        $result += $nb > 0 ? $lance : - $lance;
        $texte .= "<p>Résultat du dé n°$i : $lance / $value</p>";
    }
    // résultat final du lancé de dés
    $texte .= "<p>Résultat final des dés : $result</p>";
    // mise à jour du texte
    $this->setInfoPerso($texte);
}

    protected function initHP(string $espece)
    {
        // TODO: Implement initHP() method.
    }

    protected function initAbility(string $espece)
    {
        // TODO: Implement initAbility() method.
    }

    protected function initStrength(string $espece)
    {
        // TODO: Implement initStrength() method.
    }

    protected function initSpeed(string $espece)
    {
        // TODO: Implement initSpeed() method.
    }

}