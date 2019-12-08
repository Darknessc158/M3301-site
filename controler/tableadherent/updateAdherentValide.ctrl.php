<?php
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

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

//delete avant
$adherents->supprUnAdherent($_GET['idAdherent']);

$unAdherent = $adherents->insertUnAdherent($nom,$prenom,$categorie,$datenaissance,$adresse,$telephone,$mail,$numlicence);

$resadh = $adherents->getLesAdherents();

include('../../view/adherentview/adminpage.php');
?>
