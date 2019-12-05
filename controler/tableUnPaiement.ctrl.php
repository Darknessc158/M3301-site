<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../model/data/db');

if (isset($_GET['idAdherent']) && ($paiements->paiementExiste($_GET['idAdherent']) != 0) ){
  $id=$_GET['idAdherent'];
  $nb = $paiements->getNbLigne($id);
  $res = $paiements->getUnPaiement($id);
}else{
  $res = $paiements->getLesPaiements();
  $nb = $paiements->getNbLigneTot();
}

$nbloop = $nb;
$respaiement = $res;
var_dump($respaiement);

//view
include('../view/adminpage.paiement.php');
?>
