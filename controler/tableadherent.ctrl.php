<?php
require_once('../model/adherent.class.php');
require_once('../model/adherentDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$adherents = new adherentDAO($config['database_path']);

if (isset($_GET['tri'])){ //Si valeur et element dans la query string
  $tri=$_GET['tri'];
    $resadh = $adherents->getListeTrie($tri);//les articles voulus en fonction des parametres de la query string sont recupérés
    }else{
    $resadh = $adherents->getLesAdherents(); //si rien dans la query string on recupere tous les articles
}

//$n = $adherents->getUnAdherent(1);
$nblignes = $adherents->getNbLigne();
//view
include('../view/adminpage.php');
?>
