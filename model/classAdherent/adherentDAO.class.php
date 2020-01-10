<?php class adherentDAO { //classe adherent basededonnees
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
  function adherentExiste($idadherent){ //verif si un adherent existe
    $req = "SELECT count(*) as nb FROM adherent WHERE idAdherent=$idadherent;";
    $sth=$this->db->query($req);
    $data = $sth->fetch();
    $res = $data['nb'];
    return $res;
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
          case 'adressecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY adresse ASC ");
          break;
          case 'adressedecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY adresse DESC ");
          break;
          case 'numlicencecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY numLicence ASC ");
          break;
          case 'numlicencedecroit':
          $recherche = $this->db->query("SELECT * FROM adherent ORDER BY numLicence DESC ");
          break;
          default:
          $recherche = $this->db->query("SELECT * FROM adherent");
          break;
          }
    $resultats=$recherche->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $resultats;
  }

  function supprUnAdherent($idAdherent){ //supression d'un adherent
    $req = "DELETE FROM adherent where $idAdherent = idAdherent;";
    $sth=$this->db->query($req);
  }

  function insertUnAdherent($nom,$prenom,$categorie,$role,$datenaissance,$adresse,$telephone,$mail,$numLicence,$urlPhoto,$urlPhotoAlt){ // Ajout d'un adherent
    $req = "INSERT INTO adherent (nom,prenom,categorie,role,datenaissance,adresse,telephone,mail,numLicence,urlPhoto,urlPhotoAlt) VALUES ('$nom','$prenom','$categorie','$role','$datenaissance','$adresse','$telephone','$mail','$numLicence','$urlPhoto','$urlPhotoAlt');";
    $sth=$this->db->query($req);
  }

  function getLesCoureurs(){ //recuperation de tous les coureurs de la bd
    $req = "SELECT * FROM adherent where role LIKE 'coureur/%' OR role LIKE 'deux/%';";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $res;
  }
  function getLeBureau(){ //recuperation de tous les membres du bureau de la bd
    $req = "SELECT * FROM adherent where role LIKE 'bureau/%' OR role LIKE 'deux/%';";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'adherent');
    return $res;
  }
}
  ?>
