<?php

class commandearticleDAO {
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

  function getLesCommandeArticles(){
    $req = "SELECT * FROM commandearticle;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'commandearticle');
    return $res;
  }

  function getUneCommandeArticle($numPaiement,$numArticle){
    $req = "SELECT * FROM commandearticle WHERE numPaiement=$numPaiement and numArticle=$numArticle;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'commandearticle');
    return $res[0];
  }

}

?>
