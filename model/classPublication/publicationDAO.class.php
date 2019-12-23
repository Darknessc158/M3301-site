<?php
/**
 *
 */
class publicationDAO
{
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

  function getLesArticlesBlog(){ //recuperation de tous les articles de la bd
    $req = "SELECT * FROM publication ORDER BY datePublication DESC;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'publication');
    return $res;
  }
  function insertArticle($titre,$description,$content,$datePublication) //Ajout d'une actualite
  {
    $req = "INSERT INTO publication (titre,description,content,datePublication) VALUES ('$titre','$description','$content','$datePublication');";
    $sth=$this->db->query($req);
  }
  function getUnArticleBlog($idPublication){ //recuperation d'un article
    $req = "SELECT * FROM publication where $idPublication = idPublication;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'publication');
    return $res[0];
  }


}



 ?>
