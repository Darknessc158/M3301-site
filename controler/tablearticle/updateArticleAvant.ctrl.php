<?php
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$articles = new articleDAO($config['database_path']);

if (isset($_GET['idArticle'])){
  $id=$_GET['idArticle'];
}

$unArticle = $articles->getUnArticle($id);

$description = $unArticle->getDescription();
$prix = $unArticle->getPrix();
$categorie = $unArticle->getCategorie();
$stock = $unArticle->getQuantite();
$marque = $unArticle->getMarque();

include('../../controler/tablearticle/updateArticle.ctrl.php?idArticle='.$id);
?>
