<?php
/**
 *
 */
class articleDAO
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

  function getLesArticles(){ //recuperation de tous les articles de la bd
    $req = "SELECT * FROM article;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'article');
    return $res;
  }

  function getUnArticle($idArticle){ //recuperation d'un article avec son id
    $req = "SELECT * FROM article WHERE $idArticle=idArticle;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'article');
    return $res[0];
  }
  function supprUnArticle($idArticle){ //suppression d'un article avec son id
    $req = "DELETE FROM article WHERE $idArticle=idArticle;";
    $sth=$this->db->query($req);
  }
  function getUnArticleRef($ref){ //recuperation d'un article avec sa ref
    $req = "SELECT * FROM article WHERE description='$ref';";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'article');
    return $res[0];
  }

  function insertUnArticle($prix,$categorie,$stock,$description,$marque){ // Ajout d'un article
    $req = "INSERT INTO article (prix,categorie,quantite,description,marque) VALUES ('$prix','$categorie','$stock','$description','$marque');";
    $sth=$this->db->query($req);
  }

  function updateUnArticleStock($id,$stockrestant){ // update d'un article
    $req = "UPDATE article set quantite=$stockrestant WHERE idArticle=$id;";
    $sth=$this->db->query($req);
  }
  public function getListeTrie($tri){ //fonction pour recuperer les objets correspondant à une valeur d'un element(type,intitule...) et si tri recuperation triée
        switch ($tri) {
          case 'catecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY categorie ASC ");
          break;
          case 'catedecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY categorie DESC ");
          break;
          case 'produitcroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY description ASC ");
          break;
          case 'produitdecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY description DESC ");
          break;
          case 'quantitecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY quantite ASC ");
          break;
          case 'quantitedecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY quantite DESC ");
          break;
          case 'prixcroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY prix ASC ");
          break;
          case 'prixdecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY prix DESC ");
          break;
          case 'marquecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY marque ASC ");
          break;
          case 'marquedecroit':
          $recherche = $this->db->query("SELECT * FROM article ORDER BY marque DESC ");
          break;
          default:
          $recherche = $this->db->query("SELECT * FROM article");
          break;
          }
    $resultats=$recherche->fetchAll(PDO::FETCH_CLASS,'article');
    return $resultats;
  }
}



 ?>
