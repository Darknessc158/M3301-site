<?php
require_once('../model/adherent.class.php');
require_once('../model/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$adherents = new adherentDAO($config['database_path']);

//$n = $adherents->getUnAdherent(1);
$nblignes = $adherents->getNbLigne();
//view
include('../view/adminpage.php');
?>
