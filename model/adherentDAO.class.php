<?php class adherentDAO { //classe adherent basededonnees
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

  function getLesAdherents(){ //recuperation de tous les adherents de la bd
    $req = "SELECT * FROM adherent;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $res;
  }

  function getUnAdherent($idadherent){ //recuperation d'un adherent avec son id
    $req = "SELECT * FROM adherent WHERE idAdherent=$idadherent;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $res[0];
  }

  function getNbLigne(){
    $sth=$this->db->query("SELECT count(*) as nb FROM adherent;");
    $data = $sth->fetch();
    $res = $data['nb'];
    return $res;
  }

  public function getListeTrie($tri){ //fonction pour recuperer les objets correspondant à une valeur d'un element(type,intitule...) et si tri recuperation triée
        switch ($tri) {
          case 'nomcroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY nom ASC ");
          break;
          case 'nomdecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY nom DESC ");
          break;
          case 'prenomcroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY prenom ASC ");
          break;
          case 'prenomdecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY prenom DESC ");
          break;
          case 'catecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY categorie ASC ");
          break;
          case 'catedecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY categorie DESC ");
          break;
          case 'datenaissancecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY datenaissance ASC ");
          break;
          case 'datenaissancedecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY datenaissance DESC ");
          break;
          default:
          $recherche = $this->db->query("SELECT * FROM adherent");
          break;
          }
    $resultats=$recherche->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $resultats;
  }

  //Aide Ajout adherent ...
  /*
  function addArticle($intitule,$description,$type,$prix,$reference,$urlphoto){ //essai d'une fonction pour ajouter un article a la bd
    $stmt = $this->db->prepare("INSERT INTO ARTICLE (reference,intitule,description,type,prix,urlphoto) VALUES (:reference, :intitule, :description, :type, :prix, :urlphoto);");
    $stmt->bindParam(':reference',$reference);
    $stmt->bindParam(':intitule',$intitule);
    $stmt->bindParam(':description',$description);
    $stmt->bindParam(':type',$type);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':urlphoto',$urlphoto);
    $sth->execute();
  }*/
}
  ?>
