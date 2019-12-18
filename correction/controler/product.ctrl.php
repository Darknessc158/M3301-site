<?php
// Utilisation de la classe View du framework
require_once('../framework/view.class.php');
// Utilisation du DAO
require_once("../model/DAO.class.php");

//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

if ( isset($_GET['code'])) {
  $codeFrom = $_GET['code'];
} else {
  // Erreur le code n'est pas donné
  die("product.ctrl.php: la valeur 'code' manque dans la query string");
}

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

$dao = new DAO();

// Recupère le produit dont le code est donné
$p = $dao->getProduct($codeFrom);


//////////////////////////////////////////////////////////////////////////////
// PARTIE GESTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

// Création de l'objet vue
$view = new View('product.view.php');

// Passe les données à la vue
$view->product_name = $p->getProduct_name();
$view->brands = $p->getBrands();
$view->ingredients_text = $p->getIngredients_text();
$view->image_url = $p->getImage_url();
$view->additives_fr = $p->getAdditives_fr();
$view->main_category_fr = $p->getMain_category_fr();
$view->categories_fr = $p->getCategories_fr();

// Appel la vue
$view->show();

?>
