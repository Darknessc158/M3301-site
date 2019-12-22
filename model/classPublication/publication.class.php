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

  public function getIdPublication()
  {
    return $this->$idPublication;
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
}


 ?>
