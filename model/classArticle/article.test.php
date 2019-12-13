<?php
require_once('article.class.php');
require_once('articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instace DAO
$articles = new articleDAO($config['database_path']);

$m = $articles->getLesArticles();
var_dump($m);
//$n = $adherents->getUnAdherent(1);
//var_dump($n);
//$l = $adherents->getNbLigne();
//printf("nombre de lignes : $l \n");

//$id = $adherents->getUnAdherent(2);
//var_dump($id);

?>
