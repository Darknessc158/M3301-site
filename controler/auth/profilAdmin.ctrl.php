<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.ctrl.php");
    exit;
}

//REcuperation des infos sur les stocks des articles
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');
// Creation de l'instance DAO
$articles = new articleDAO($config['database_path']);
$lesarticles = $articles->getLesArticles();

include('../../view/page administrateur/admin.view.php');
?>
