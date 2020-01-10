<?php
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$articles = new articleDAO($config['database_path']);


$description = $_POST['description'];
$prix = $_POST['prix'];
$categorie = $_POST['categorie'];
$stock = $_POST['stock'];
$marque = $_POST['marque'];

$unArticle = $articles->insertUnArticle($prix,$categorie,$stock,$description,$marque);

$lesArticles = $articles->getLesArticles();

include('../../view/articleview/adminpage.article.php');
?>
