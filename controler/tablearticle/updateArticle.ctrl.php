<?php
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$articles = new articleDAO($config['database_path']);

$description = $_POST['prenom'];
$prix = $_POST['nom'];
$categorie = $_POST['categorie'];
$stock = $_POST['datenaissance'];
$marque = $_POST['adresse'];

//delete avant
$articles->supprUnArticle($_GET['idArticle']);

$unArticle = $articles->insertUnArticle($prix,$categorie,$stock,$description,$marque);

$lesArticles = $articles->getLesArticles();

include('../../view/articleview/adminpage.article.php');
?>
