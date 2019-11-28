<?php
require_once('adherent.class.php');
require_once('adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$articles = new adherentDAO($config['database_path']);

$m = $adherents->getLesAdherents();
var_dump($m);
//$n = $adherent->getUnAdherent();
//var_dump($n);
?>
