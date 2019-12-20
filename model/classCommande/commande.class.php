<?php
/**
 *
 */
class commande
{
  public $numcommande;
  public $date;
  public $prixTTC;
  public $prixTHC;
  public $MEMBREnumadh;


  public function getnumcommande()
  {
    return $this->numcommande;
  }


  public function getdate()
  {
    return $this->date;
  }

  public function getprixTTC()
  {
    return $this->prixTTC;
  }

  public function getTHC()
  {
    return $this->prixTHC;
  }

  public function getMEMBREnumadh()
  {
    return $this->MEMBREnumadh;
  }
}



 ?>
