<?php class adherentDAO { //classe adherent basededonnees
  private $db;

  public function __construct($path){
    $database ='sqlite:data/db/scale.db';
    try{
      $this->db = new PDO($database);
      //var_dump($database);
    }

    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }

  function getLesAdherents(){ //recuperation de tous les articles de la bd
    $req = "SELECT * FROM adherent";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $res;
  }

  function getUnAdherent($idadherent){ //recuperation d'un article avec son id
    $req = "SELECT * FROM adherent WHERE idadherent=$idadherent;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Article');
    return $res[0];
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
