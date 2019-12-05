<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../model/data/db');

if (isset($_GET['idAdherent']) && ($paiements->paiementExiste($_GET['idAdherent']) != 0) ){
  $id=$_GET['idAdherent'];
  $res = $paiements->getUnPaiement($id);
}else if(isset($_GET['idAdherent'])){
  $res = "Pas de paiement pour cette adherent"
}else{
  $res = $paiements->getLesPaiements();
}

$respaiement = $res;

//view
include('../view/adminpage.paiement.php');
?>
