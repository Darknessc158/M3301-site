<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');

require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$paiements = new paiementDAO($config['database_path']);
$articles = new articleDAO($config['database_path']);
$adherents = new adherentDAO($config['database_path']);

if (isset($_GET['idPaiement'])){
  $id=$_GET['idPaiement'];
}

$unPaiement = $paiements->getUnPaiement($id);

$type = $_POST['type'];
if ($type == 'Article'){
  $datePaiement = $_POST['datePaiementArticle'];
  $description = explode("(",$unPaiement->getDescription())[0];
  $quantiteCommande = $_POST['quantiteCommande'];
  $prix = (($articles->getUnArticleRef($description))->getPrix())*$quantiteCommande;
  $etatDuPaiement = $_POST['etatDuPaiementArticle'];
  $description = $description.'('.$quantiteCommande.')';
}else{//adhésion,licence
  $datePaiement = $_POST['datePaiement'];
  $prix = $_POST['prix'];
  $description = $_POST['description'];
  $etatDuPaiement = $_POST['etatDuPaiement'];
}
$idAdherent = $_GET['idAdherent'];

//delete avant
$paiements->supprUnPaiement($_GET['idPaiement']);

$unPaiement = $paiements->insertUnPaiement($datePaiement,$prix,$description,$etatDuPaiement,$type,$idAdherent);

$res = $paiements->getLesPaiements();
$respaiement = $res;


include('../../controler/tablepaiement/tableUnPaiement.ctrl.php');
?>
