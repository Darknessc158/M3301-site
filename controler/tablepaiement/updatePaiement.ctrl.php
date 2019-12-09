<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');

require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation des instances DAO
$paiements = new paiementDAO($config['database_path']);
$adherents = new adherentDAO($config['database_path']);

if (isset($_GET['idPaiement'])){
  $id=$_GET['idPaiement'];
}

$unPaiement = $paiements->getUnPaiement($id);

$datePaiement = $unPaiement->getDatePaiement();
$prix = $unPaiement->getPrix();
$description = $unPaiement->getDescription();
$etatDuPaiement = $unPaiement->getEtatDuPaiement();
$type = $unPaiement->getType();
$idAdherent = $unPaiement->getIdAdherent();

//appel le formulaire paiement pré rempli
include('../../view/paiementview/updatePaiement.php');
?>
