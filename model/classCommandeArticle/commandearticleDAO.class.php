<?php

class commandearticleDAO {
  private $db;

  public function __construct(){
    $database = 'mysql:host=soysauceduck99.ddns.net;dbname=scale';
    $user = 'admincave';
    $password = 'cave';
    try{
      $this->db = new PDO($database, $user, $password);
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
