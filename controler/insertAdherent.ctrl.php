<?php
require_once('../model/adherent.class.php');
require_once('../model/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$adherents = new adherentDAO($config['database_path']);


$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$categorie = $_POST['categorie'];
$datenaissance = $_POST['datenaissance'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];
$numlicence = $_POST['numlicence'];

$unAdherent = $adherents->insertUnAdherent($prenom,$nom,$categorie,$datenaissance,$adresse,$telephone,$mail,$numlicence);

$resadh = $adherents->getLesAdherents();

include('../view/adminpage.php');
?>
