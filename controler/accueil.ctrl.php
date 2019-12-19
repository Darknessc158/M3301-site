<?php

// Initialize the session
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  $etat = "Bienvenue,".$_SESSION["username"];
} else {
  $etat = "Se connecter ou s'inscrire";
}


// Check if the user is already logged in, if yes then redirect him to welcome pageta


include('../view/autres/accueil.view.php');
 ?>
