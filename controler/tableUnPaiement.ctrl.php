<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../model/data/db');

if (isset($_GET['idAdherent']) && $paiements->paiementExiste()!= 0 ){
  $id=$_GET['idAdherent'];
  $respaiement = $paiements->getUnPaiement($id);
}else{
  $respaiement = $paiements->getLesPaiements();
}

//view
include('../view/adminpage.paiement.php');
?>
