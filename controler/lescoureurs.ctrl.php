<?php

require_once('../model/classAdherent/adherent.class.php');
require_once('../model/classAdherent/adherentDAO.class.php');
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  $etat = "Bienvenue,".$_SESSION["username"];
} else {
  $etat = "Se connecter ou s'inscrire";
}

$adherents = new adherentDAO('../model/data/db');

$lesadh = $adherents->getLesCoureurs();

//var_dump($lesadh);

include('../view/autres/lescoureurs.view.php');
?>
