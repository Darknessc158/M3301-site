<?php
require_once('../model/classPaiement/paiement.class.php');
require_once('../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../model/data/db');

if (isset($_GET['idAdherent']) && ($paiements->paiementExiste($_GET['idAdherent']) != 0) ){
  $id=$_GET['idAdherent'];
  $res = $paiements->getUnPaiement($id);
<<<<<<< HEAD
=======
}else if(isset($_GET['idAdherent'])){
  $res = 0;
>>>>>>> 53bb30478df64981f35592a499b34db73c23efc9
}else{
  $res = $paiements->getLesPaiements();
}

$respaiement = $res;

//view
include('../view/adminpage.paiement.php');
?>
