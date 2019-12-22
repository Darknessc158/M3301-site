<?php
require_once('../../model/classPaiement/paiement.class.php');
require_once('../../model/classPaiement/paiementDAO.class.php');
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation des instances DAO
$paiements = new paiementDAO();
$articles = new articleDAO();
$adherents = new adherentDAO();

$lesadh = $adherents->getLesAdherents();



$type = $_POST['type'];
if ($type == 'Article'){
  //obligé de le faire 2 fois car pas le meme name pour article et autres.
  $datePaiement = $_POST['datePaiementArticle'];
  $description = $_POST['descriptionArticle'];
  $quantiteCommande = $_POST['quantiteCommande'];
  //-------------------------------------------

  //changement du stock de l'article commandé
  $articlePaye = $articles->getUnArticleRef($description);
  $stock = $articlePaye->getQuantite();
  $stockrestant = $stock-$quantiteCommande;
  $idArticle = $articlePaye->getIdArticle();
  $articles->updateUnArticleStock($idArticle,$stockrestant); //on update le stock dans le DAO
  //----------------------------------------

  $prix = ($articlePaye->getPrix())*$quantiteCommande;//Calcul du prix
  $etatDuPaiement = $_POST['etatDuPaiementArticle'];
  $description = $_POST['descriptionArticle'].'('.$quantiteCommande.')'; //on ecrit nomProduit (quantite)

}else{//adhésion,licence
  $datePaiement = $_POST['datePaiement'];
  $prix = $_POST['prix'];
  $description = $_POST['description'];
  $etatDuPaiement = $_POST['etatDuPaiement'];
}

if (isset($_GET['idAdherent'])){
  $idAdherent = $_GET['idAdherent'];
}else{
$idAdherent = $_POST['idAdherent'];
}

$unPaiement = $paiements->insertUnPaiement($datePaiement,$prix,$description,$etatDuPaiement,$type,$idAdherent);


//GESTION affichage paiement----------------------------------------
if (isset($_GET['idAdherent'])){ // on a l'id adherent
  $id=$_GET['idAdherent'];
  $res = $paiements->getLesPaiementsDunAdherent($id);
}else{
  $res = $paiements->getLesPaiements(); // si pas id on recupere tous les paiements
}
$respaiement = $res; //on remplit la variable pour la view
//--------------------------------------------------------------------

//view
include('../../controler/tablepaiement/tableUnPaiement.ctrl.php');

?>
