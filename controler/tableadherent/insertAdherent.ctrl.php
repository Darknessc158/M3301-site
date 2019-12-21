<?php
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');

// Creation de l'instance DAO
$adherents = new adherentDAO();

//Récuperation des données du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$datenaissance = $_POST['datenaissance'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];
$categorie = $_POST['categorie'];
$numlicence = $_POST['numlicence'];
$urlphoto = $_POST['urlphoto'];
$role = $_POST['role'];
$ulrphotoalt = $_POST['urlphotoalt'];

$unAdherent = $adherents->insertUnAdherent($nom,$prenom,$categorie,$role,$datenaissance,$adresse,$telephone,$mail,$numlicence,$urlphoto,$ulrphotoalt);

$resadh = $adherents->getLesAdherents();

include('../../view/adherentview/adminpage.php');
?>
