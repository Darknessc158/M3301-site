<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../../model/data/db');


$datePaiement = $_POST['datePaiement'];
$prix = $_POST['prix'];
$description = $_POST['description'];
$etatDuPaiement = $_POST['etatDuPaiement'];
$type = $_POST['type'];
$idAdherent = $_POST['idAdherent'];

$unPaiement = $paiements->insertUnPaiement($datePaiement,$prix,$description,$etatDuPaiement,$type,$idAdherent);

$res = $paiements->getLesPaiements();
$respaiement = $res;

include('../../view/paiementview/adminpage.paiement.php');
?>