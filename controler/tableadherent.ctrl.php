<?php
require_once('adherent.class.php');
require_once('adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$adherents = new adherentDAO($config['database_path']);

//$n = $adherents->getUnAdherent(1);
$nblignes = $adherents->getNbLigne();
echo "$nblignes";
//view
include('../view/adminpage.php');
?>
