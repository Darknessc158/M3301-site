<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$adherents = new paiementDAO($config['database_path']);

if (isset($_GET['idAdherent'])){
  $id=$_GET['idAdherent'];
  $respaiement->getUnPaiement($id);
}else{
  $respaiement->getLesPaiements();
}

//view
include('../view/adminpage.paiement.php');
?>
