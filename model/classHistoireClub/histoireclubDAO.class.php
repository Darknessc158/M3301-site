<?php class histoireClubDAO { //classe histoireclub basededonnees
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

  function getLesHistoires(){ //recuperation de tous les histoires de la bd
    $req = "SELECT * FROM histoireclub;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'histoireclub');
    return $res;
  }

  function getUneHistoireClub($image){ //recuperation d'un histoire avec sa photo
    $req = "SELECT * FROM histoireclub WHERE image=$image;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'histoireclub');
    return $res[0];
  }
  function histoireExiste($image){ //verif si un histoire existe
    $req = "SELECT count(*) as nb FROM histoireclub WHERE image=$image;";
    $sth=$this->db->query($req);
    $data = $sth->fetch();
    $res = $data['nb'];
    return $res;
  }

  function getNbLigne(){
    $sth=$this->db->query("SELECT count(*) as nb FROM histoireclub;");
    $data = $sth->fetch();
    $res = $data['nb'];
    return $res;
  }

  function supprUneHistoire($image){ //supression d'une histoire
    $req = "DELETE FROM histoireclub where $image = image;";
    $sth=$this->db->query($req);
  }

  function insertUneHistoire($image,$description,$annee){ // Ajout d'un histoire
    $req = "INSERT INTO histoireclub (image,description,annee) VALUES ('$image','$description','$annee');";
    $sth=$this->db->query($req);
  }
}
  ?>
