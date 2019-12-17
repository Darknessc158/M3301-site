<?php
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$adherents = new adherentDAO();

if (isset($_GET['type'])){
  $type=$_GET['type'];
  if ($type == 'delete'){
    $id=$_GET['idAdherent'];
    $adherents->supprUnAdherent($id);
  }
}

if (isset($_GET['tri'])){ //Si valeur et element dans la query string
  $tri=$_GET['tri'];
  $resadh = $adherents->getListeTrie($tri);//les adherents triés
}else{
  $resadh = $adherents->getLesAdherents(); //si rien dans la query string on ne tri pas
}



//$n = $adherents->getUnAdherent(1);
$nblignes = $adherents->getNbLigne();
//view
include('../../view/adherentview/adminpage.php');
?>
