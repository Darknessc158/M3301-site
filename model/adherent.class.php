<?php
/**
 *
 */
class adherent
{
    public $idAdherent;
    public $nom;
    public $prenom;
    public $categorie;
    public $datenaissance;
    public $adresse;
    public $telephone;
    public $mail;
    public $numLicence;


    public function getIdAdherent(){
      return $this->idAdherent;
    }
    public function getNom(){
      return $this->nom;
    }
    public function getPrenom(){
      return $this->prenom;
    }
    public function getCategorie(){
      return $this->categorie;
    }
    public function getDateNaissance(){
      return $this->datenaissance;
    }
    public function getAdresse(){
      return $this->adresse;
    }
    public function getTelephone(){
      return $this->telephone;
    }
    public function getMail(){
      return $this->mail;
    }
    public function getNumLicence(){
      return $this->numLicence;
    }
}




 ?>
