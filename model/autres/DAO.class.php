<?php

require_once("../model/histoireclub.class.php");
require_once("../model/Actualite.class.php");

class DAO {
  // L'objet local PDO de la base de donnée
  private $db;
  // Le type, le chemin et le nom de la base de donnée
  private $database = 'sqlite:../data/db/scale.db';

  public function __construct(){
    try{
      $this->db = new PDO($this->database);
    }
    catch (PDOException $e){
      die("erreur de connexion a ".$this->database." : ".$e->getMessage());
    }
  }

  //Acces à tout les articles
  function getAllArticles() : array {
    $req = "SELECT * FROM article";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll(PDO::FETCH_CLASS, "article");
    return $result;
  }

  function getAllhistoireclub() : array {
    $req = "SELECT * FROM histoireclub";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll(PDO::FETCH_CLASS, "article");
    return $result;
  }

}

 ?>
