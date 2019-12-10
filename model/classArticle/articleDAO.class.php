<?php
/**
 *
 */
class articleDAO
{
  private $db;

  function __construct($path)
  {
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

  function getLesArticles(){ //recuperation de tous les adherents de la bd
    $req = "SELECT * FROM article;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'article');
    return $res;
  }

  function getUnArticle($idArticle){ //recuperation d'un adherent avec son id
    $req = "SELECT * FROM article WHERE $idArticle=idArticle;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'article');
    return $res[0];
  }

  function insertUnArticle($prix,$categorie,$stock,$description,$marque){ // Ajout d'un adherent
    $req = "INSERT INTO paiement (prix,categorie,quantite,description,marque) VALUES ('$prix','$categorie','$stock','$description','$marque');";
    $sth=$this->db->query($req);
  }

}



 ?>
