<?php
require_once('adherent.class.php');
require_once('adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$adherents = new adherentDAO($config['database_path']);

$m = $adherents->getLesAdherents();
printf("test 1 :");
var_dump($m);
//$n = $adherents->getUnAdherent(1);
//var_dump($n);
$l = $adherents->getNbLigne();
printf("nombre de lignes : $l \n");

$id = $adherents->getUnAdherent(2);
var_dump($id);

?>
