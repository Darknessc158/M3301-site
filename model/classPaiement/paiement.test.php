<?php
require_once('paiement.class.php');
require_once('paiementDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$paiements = new paiementDAO($config['database_path']);

$m = $paiements->getLesPaiements();
var_dump($m);

$n = $paiements->getUnPaiement(1);
var_dump($n);

?>
