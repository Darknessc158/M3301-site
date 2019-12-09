<?php

class paiementDAO { //classe paiement basededonnees
  private $db;

  public function __construct($path){
    $database ='sqlite:'.$path.'/scale.db';
    try{
      $this->db = new PDO($database);
      //var_dump($database);
    }

    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }

  function getLesPaiements(){ //recuperation de tous les paiements de la bd
    $req = "SELECT * FROM paiement;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'paiement');
    return $res;
  }

  function getLesPaiementsDunAdherent($idadherent){ //recuperation d'un paiement avec l'id d'un adherent
    $req = "SELECT * FROM paiement WHERE idAdherent=$idadherent;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'paiement');
    return $res;
  }

  function getNomPrenomAdh($idadherent){
    $req = "SELECT a.nom,a.prenom FROM paiement p,adherent a WHERE p.idAdherent=a.idAdherent and a.idAdherent=$idadherent;";
    $sth=$this->db->query($req);
    $res = $sth->fetch();
    return $res;
  }

  function getUnPaiement($idPaiement){ //recuperation d'un paiement avec l'id d'un paiement
    $req = "SELECT * FROM paiement WHERE idPaiement=$idPaiement;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'paiement');
    return $res[0];
  }

  function paiementExiste($idadherent){ //verif si un paiement existe pour cette adherent
    $req = "SELECT count(*) as nb FROM paiement WHERE idAdherent=$idadherent;";
    $sth=$this->db->query($req);
    $data = $sth->fetch();
    $res = $data['nb'];
    return $res;
  }
  function insertUnPaiement($datePaiement,$prix,$description,$etatDuPaiement,$type,$idAdherent){ // Ajout d'un paiement
    $req = "INSERT INTO paiement (datePaiement,prix,description,etatDuPaiement,type,idAdherent) VALUES ('$datePaiement','$prix','$description','$etatDuPaiement','$type','$idAdherent');";
    $sth=$this->db->query($req);
  }
  function supprUnPaiement($idPaiement){ //supression d'un adherent
    $req = "DELETE FROM paiement where $idPaiement = idPaiement;";
    $sth=$this->db->query($req);
  }

}
  ?>
