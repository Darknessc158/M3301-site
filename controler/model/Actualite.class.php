<?php
// Un article informatif apparent dans la catégorie "Actualités"
class Actualite{
  private $ref;
  private $titre;
  private $image;
  private $lien;
  private $description;

  // Getters
  function getRef() : int {
    return $this->ref;
  }

  function getTitre() : string {
    return $this->titre;
}
  // Retourne le chemin de l'image (data/img)
  function getImage() : string {
    return $this->image;
  }
  // Retourne l'URL du lien si nécessaire
  // Peut-être utiliser un array si plusieurs liens ?
  function getLien() : string {
    return $this->lien;
  }

  function getDescription() : string {
    return $this->description;
  }
 ?>
