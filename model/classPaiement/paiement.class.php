<?php
/**
 *
 */
class paiement
{
    public $idPaiement;
    public $datePaiement;
    public $prix;
    public $description;
    public $etatDuPaiement;
    public $type;
    public $idAdherent;
    public function getIdPaiement(){
      return $this->idPaiement;
    }
    public function getDatePaiement(){
      return $this->datePaiement;
    }
    public function getPrix(){
      return $this->prix;
    }
    public function getDescription(){
      return $this->description;
    }
    public function getEtatDuPaiement(){
      return $this->etatDuPaiement;
    }
    public function getType(){
      return $this->type;
    }
    public function getIdAdherent(){
      return $this->idAdherent;
    }
}
 ?>
