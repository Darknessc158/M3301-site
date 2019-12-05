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

  function getUnPaiement($idadherent){ //recuperation d'un paiement avec l'id d'un adherent
    $req = "SELECT * FROM paiement WHERE idAdherent=$idadherent;";
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
}
  ?>