<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');

// Creation de l'instance DAO
$paiements = new paiementDAO('../../model/data/db');


//------------------gestion supression d'un paiement-------------------------
if (isset($_GET['type'])) {
  $type = $_GET['type'];
  if ($type == 'delete'){
    $id=$_GET['idPaiement'];
    $paiements->supprUnPaiement($id);
  }
}
//----------------------------------------------------------------------------


//GESTION affichage paiement----------------------------------------
if (isset($_GET['idAdherent'])){ // on a l'id adherent
  $id=$_GET['idAdherent'];
  $res = $paiements->getLesPaiementsDunAdherent($id);
}else{
  $res = $paiements->getLesPaiements(); // si pas id on recupere tous les paiements
}
$respaiement = $res; //on remplit la variable pour la view
<<<<<<< HEAD
=======
//test
>>>>>>> 76ce45d5a1ffd7cfa6e6fa079911a795f4d7d985
var_dump($respaiement);
//--------------------------------------------------------------------


//recuperation des donnes pour recup le nom et prenom de l'id qui correspond
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');
$config = parse_ini_file('../../config/config.ini');
$adherents = new adherentDAO($config['database_path']);
$lesadh = $adherents->getLesAdherents();

//----------------------------------------------------------

//view
include('../../view/paiementview/adminpage.paiement.php');
?>
