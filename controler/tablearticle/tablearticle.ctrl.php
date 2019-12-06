<?php
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$articles = new articleDAO($config['database_path']);


$lesArticles = $articles->getLesArticles(); //recuperation des articles


//view
include('../../view/articleview/adminpage.article.php');



 ?>
