<?php
class TroisiemeClasse{
    # Paramètres
    # public = peut être lue/modifiée en dehors de la classe (et dedans, ainsi que dans les héritiers).
    # protected = ne peut être lue/modifiée en dehors de la classe, mais peut l'être dans la classe et ses héritiers.
    # private = ne peut être lue/modifiée en dehors de la classe, mais peut l'être dans la classe elle-même.

    # Les bonnes pratiques font que les paramètres sont généralement en private ou protected.
    # private si il est inutile d'hériter cette classe
    # protected si il est utile d'hériter cette classe

    public $param1 = 'Un';
    private $param2 = 'Deux';
    protected $param3 = 'Trois';

    # ICI

    const CONST_1 = 'Yes';
}