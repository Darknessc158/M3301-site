<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  $etat = "Bienvenue,".$_SESSION["username"];
} else {
  $etat = "Se connecter ou s'inscrire";
}

require_once('../../model/classHistoireClub/histoireclub.class.php');
require_once('../../model/classHistoireClub/histoireclubDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$histoireclub = new histoireClubDAO();

$reshist = $histoireclub->getLesHistoires();
$nblignes = $histoireclub->getNbLigne();
//view
include('../../view/histoireclubview/histoireclub.view.php');
?>
