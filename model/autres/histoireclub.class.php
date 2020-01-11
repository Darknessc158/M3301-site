<?php
// Un article informatif apparent dans la catégorie "Actualités"
class histoireclub{
  private $image;
  private $description;
  private $annee;
  // Getters
  // Retourne le chemin de l'image (data/img)
  function getImage() : string {
    return $this->image;
  }
  function getDescription() : string {
    return $this->description;
  }
  function getAnnee() : string {
    return $this->annee;
  }
 ?>
