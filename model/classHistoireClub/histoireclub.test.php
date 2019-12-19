<?php
require_once('histoireclub.class.php');
require_once('histoireclubDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instace DAO
$histoireClub = new histoireClubDAO();

$m = $histoireClub->getLesHistoires();
var_dump($m);
//$n = $adherents->getUnAdherent(1);
//var_dump($n);
//$l = $adherents->getNbLigne();
//printf("nombre de lignes : $l \n");

//$id = $adherents->getUnAdherent(2);
//var_dump($id);

?>
