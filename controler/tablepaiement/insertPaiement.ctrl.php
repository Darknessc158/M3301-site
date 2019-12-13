<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../../model/data/db');
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

$datePaiement = $_POST['datePaiement'];
$prix = $_POST['prix'];
$description = $_POST['description'];
$etatDuPaiement = $_POST['etatDuPaiement'];
$type = $_POST['type'];

if($type == 'Article'){
  $refArticle = $_POST['nomArticle'];
  $quantiteCommande = $_POST['quantiteCommande'];
  //Puis faire l'instance DAO avec la class article et verif puis diminuer le stock ...
}

if (isset($_GET['idAdherent'])){
  $idAdherent = $_GET['idAdherent'];
}else{
$idAdherent = $_POST['idAdherent'];
}

$unPaiement = $paiements->insertUnPaiement($datePaiement,$prix,$description,$etatDuPaiement,$type,$idAdherent);


//GESTION affichage paiement----------------------------------------
if (isset($_GET['idAdherent'])){ // on a l'id adherent
  $id=$_GET['idAdherent'];
  $res = $paiements->getLesPaiementsDunAdherent($id);
}else{
  $res = $paiements->getLesPaiements(); // si pas id on recupere tous les paiements
}
$respaiement = $res; //on remplit la variable pour la view
//--------------------------------------------------------------------


//recuperation des donnes pour recup le nom et prenom de l'id qui correspond
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');
$config = parse_ini_file('../../config/config.ini');
$adherents = new adherentDAO($config['database_path']);
$lesadh = $adherents->getLesAdherents();

//----------------------------------------------------------

//view
if (isset($_GET['idAdherent'])){//si l'adherent est set alors on redirige vers ses paiements
  include('../../controler/tablepaiement/tableUnPaiement.ctrl.php');
}else{
  include('../../view/paiementview/adminpage.paiement.php');
}

?>
