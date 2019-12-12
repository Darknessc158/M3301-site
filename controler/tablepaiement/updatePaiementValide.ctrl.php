<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$paiements = new paiementDAO($config['database_path']);

$type = $_POST['type'];
if ($type == 'Article'){
  $datePaiement = $_POST['datePaiementArticle'];
  $description = $_POST['descriptionArticle'];
  $quantiteCommande = $_POST['quantiteCommande'];
  $prix = (($articles->getUnArticleRef($description))->getPrix())*$quantiteCommande;
  $etatDuPaiement = $_POST['etatDuPaiementArticle'];
  $description = $_POST['descriptionArticle'].'('.$quantiteCommande.')';
}else{//adhésion,licence
  $datePaiement = $_POST['datePaiement'];
  $prix = $_POST['prix'];
  $description = $_POST['description'];
  $etatDuPaiement = $_POST['etatDuPaiement'];
}

//delete avant
$paiements->supprUnPaiement($_GET['idPaiement']);

$unPaiement = $paiements->insertUnPaiement($datePaiement,$prix,$description,$etatDuPaiement,$type,$idAdherent);

$res = $paiements->getLesPaiements();
$respaiement = $res;

//recuperation des donnes pour recup le nom et prenom de l'id qui correspond
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');
$config = parse_ini_file('../../config/config.ini');
$adherents = new adherentDAO($config['database_path']);

include('../../view/paiementview/adminpage.paiement.php');
?>
