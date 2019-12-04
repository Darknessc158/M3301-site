<?php
require_once('../model/adherent.class.php');
require_once('../model/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$adherents = new adherentDAO($config['database_path']);

if (isset($_GET['idAdherent'])){
  $idadh=$_GET['idAdherent'];
}

$unAadherent = $adherents->getUnAdherent($idadh);

$prenom = $unAdherent->getPrenom();
$nom = $unAdherent->getNom();
$categorie = $unAdherent->getCategorie();
$datenaissance = $unAdherent->getDateNaissance();
$adresse = $unAdherent->getAdresse();
$telephone = $unAdherent->getTelephone();
$mail = $unAdherent->getMail();
$numlicence = $unAdherent->getNumLicence();

include('../view/updateAdherent.php');
?>
