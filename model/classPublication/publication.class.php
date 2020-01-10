<?php

/**
 *
 */
class publication
{
  public $idPublication;
  public $titre;
  public $description;
  public $content;
  public $datePublication;

  public function getIdPublication()
  {
    return $this->idPublication;
  }
  public function getTitre()
  {
    return $this->titre;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getContent()
  {
    return $this->content;
  }
  public function getDatePublication()
  {
    return $this->datePublication;
  }
}


 ?>
