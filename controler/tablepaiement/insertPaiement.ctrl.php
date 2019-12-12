<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation des instances DAO
$paiements = new paiementDAO($config['database_path']);
$articles = new articleDAO($config['database_path']);
$adherents = new adherentDAO($config['database_path']);

$lesadh = $adherents->getLesAdherents();

$type = $_POST['type'];
if ($type == 'Article'){
  $datePaiement = $_POST['datePaiementArticle'];
  $description = $_POST['descriptionArticle'];
  $quantiteCommande = $_POST['quantiteCommande'];
  $articlePaye = $articles->getUnArticleRef($description);
  $articlePaye->reduireStock($quantiteCommande); //on reduit le stock
  $prix = ($articlePaye->getPrix())*$quantiteCommande;
  $etatDuPaiement = $_POST['etatDuPaiementArticle'];
  $description = $_POST['descriptionArticle'].'('.$quantiteCommande.')';
}else{//adhésion,licence
  $datePaiement = $_POST['datePaiement'];
  $prix = $_POST['prix'];
  $description = $_POST['description'];
  $etatDuPaiement = $_POST['etatDuPaiement'];
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

//view
include('../../controler/tablepaiement/tableUnPaiement.ctrl.php');

?>
