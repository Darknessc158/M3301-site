<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../model/data/db');

if (isset($_GET['idAdherent']) && ($paiements->paiementExiste($_GET['idAdherent']) != 0) ){
  $id=$_GET['idAdherent'];
  $res = $paiements->getUnPaiement($id);
  $nb = $paiements->getNbLigne($id);
}else{
  $res = $paiements->getLesPaiements();
  $nb = $paiements->getNbLigne();
}

$nbloop = $nb;
$respaiement = $res;

//view
include('../view/adminpage.paiement.php');
?>
