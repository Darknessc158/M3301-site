<?php
/**
 *
 */
class article
{
  public $idArticle;
  public $prix;
  public $categorie;
  public $quantite;
  public $description;
  public $marque;


  public function getIdArticle()
  {
    return $this->idArticle;
  }
  public function getPrix()
  {
    return $this->prix;
  }
  public function getCategorie()
  {
    return $this->categorie;
  }
  public function getQuantite()
  {
    return $this->quantite;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getMarque()
  {
    return $this->marque;
  }

}



 ?>
