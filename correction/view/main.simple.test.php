<?php
// Utilisation de la classe View du framework
require_once('../framework/view.class.php');

//////////////////////////////////////////////
// Gestion de la vue
//////////////////////////////////////////////

// Création de l'objet vue
$view = new View('main.view.php');

// Placement des valeurs de la vue

// Valeurs statiques pour le test
$view->nbProduct = 0;
$view->page = 1;
$view->pageMin = 1;
$view->pageMax = 1;
$view->filter = '';
$view->value = '';

// Pas de produits à afficher pour ce test
$view->products = array();

// Affiche la vue pour finir
$view->show();

?>
