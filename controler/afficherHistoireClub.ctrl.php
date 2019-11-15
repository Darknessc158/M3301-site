<?php

// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

// Création de l'objet unique DAO
$dao = new DAO();

////////////////////////////
// CONSTRUCTION DE LA VUE //
////////////////////////////

$view = new View();

$view->histoireclub = $dao->getAllArticles();

// Charge la vue
$view->display("histoireclub.view.php");


 ?>
