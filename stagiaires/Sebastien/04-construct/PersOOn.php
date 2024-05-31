<?php


// creation d'une instance (objet) de la class persoon

class PersOOn {
  //proprietes -> variables
  private string $especePerso;
  private string $nomPerso;
  protected ?int $xpPerso; // xp du personnage peux etre null ou int (?int == null)
   // equivalant PHP8.0 : protected int|null $xpPerso;
   protected null|bool|int $hpPerso;  //si plus de 2 type , utulisation des pipes 

}