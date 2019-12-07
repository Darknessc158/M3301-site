<?php
require_once('../../model/classArticle/article.class.php');
require_once('../../model/classArticle/articleDAO.class.php');

require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');


$articles = new articleDAO($config['database_path']);
$adherents = new adherentDAO($config['database_path']);

$lesadh = $adherents->getLesAdherents();//recuperation des adhérents
$lesArticles = $articles->getLesArticles(); //recuperation des articles

//view
include('../../view/paiementview/insertPaiement.php');



 ?>
