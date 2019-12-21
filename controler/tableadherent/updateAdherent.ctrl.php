<?php
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../../config/config.ini');

// Creation de l'instance DAO
$adherents = new adherentDAO($config['database_path']);

if (isset($_GET['idAdherent'])){
  $idadh=$_GET['idAdherent'];
}

$unAdherent = $adherents->getUnAdherent($idadh);

$prenom = $unAdherent->getPrenom();
$nom = $unAdherent->getNom();
$categorie = $unAdherent->getCategorie();
$datenaissance = $unAdherent->getDateNaissance();
$adresse = $unAdherent->getAdresse();
$telephone = $unAdherent->getTelephone();
$mail = $unAdherent->getMail();
$numlicence = $unAdherent->getNumLicence();
$urlphoto = $unAdherent->getUrlPhoto();
$urlphotoalt = $unAdherent->getUrlPhotoAlt();

//On separe le typerole de la description du role.
$role = $unAdherent->getRole();
$arrayrole = explode('/',$role);
$typerole = $arrayrole[0];
$role = $arrayrole[1];

include('../../view/adherentview/updateAdherent.php');
?>
