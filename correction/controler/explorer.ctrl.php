<?php
// Utilisation de la classe View du framework
require_once('../framework/view.class.php');
// Utilisation du DAO
require_once("../model/DAO.class.php");

//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// La page courante
// Valeur de départ par défaut, les pages débutent à 1
$page = 1;
// Autre valeur par la query string
if ( isset($_GET['page'])) {
  $page = $_GET['page'];
}

// L'action à réaliser : par défaut on affiche la page courante
$action = "show";
// Autre valeur par la query string
if ( isset($_GET['action'])) {
  $action = $_GET['action'];
}

//////////////// Q11 : A COMPLETER (DEBUT) ////////////////
// ... m4_divert(-1)

// Le filtre eventuel
$filter = 'none';
// Autre valeur par la query string
if ( isset($_GET['filter'])) {
  $filter = $_GET['filter'];
}

$value = '';
if ( isset($_GET['value']) && $filter != 'none') {
  $value = $_GET['value'];
}

//m4_divert(0)

//////////////// Q11 : A COMPLETER (FIN)   ////////////////

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

$dao = new DAO();

// Nombre de produits par pages
$nbProductPage = 12;


//////////////// Q10 Q11 : A COMPLETER (DEBUT) ////////////////


// A CHANGER
$lastPage = 20;

// ... m4_divert(-1)

// Calcule le nombre de produits à afficher
$nbProducts = $dao->nbProduct($filter,$value);

// Calcul du No de la dernière page
$lastPage = intVal($nbProducts / $nbProductPage) + 1;

// Traitement de l'action eventuelle
switch ($action)  {
  case 'nextPage': $page++; break;
  case 'prevPage': $page--; break;
  case 'first': $page = 1; break;
  case 'last': $page = $lastPage; break;
}

// Vérification que la page courante n'est pas hors des limites
if ($page < 1) $page = 1;
if ($page > $lastPage) $page = $lastPage;


//m4_divert(0)

//////////////// Q10 Q11 : A COMPLETER (FIN)   ////////////////

// Calcul de la navigation dans les pages

// Calcule l'interval des pages à afficher
// On choisi un nombre impair pour que la page courante soit au centre de l'interval
$nbPageMaxShown = 9;

// On essaye de maintenir les valeurs suivantes :
// L'interval du nombre de pages à afficher reste constant
// $pageMax - $pageMin + 1 = $nbPageMaxShown
// La valeur de la page courante est au centre de cet interval

// Calcul de la page la plus petite à afficher : la page courante est au milieu
$pageMin = $page - round($nbPageMaxShown/2) + 1;
// Correction si dépassement de la borne min
if ($pageMin < 1) {
  $pageMin = 1;
}
// Calcul de la page max
$pageMax = $pageMin + $nbPageMaxShown - 1;
// Correction si dépassement de la borne max
if ($pageMax > $lastPage) {
  $pageMax = $lastPage;
  // Correction du min pour avoir le bon nombre de pages à afficher
  $pageMin = $pageMax - $nbPageMaxShown + 1;
  // Correction si dépassement
  if ($pageMin < 1) {
    $pageMin = 1;
  }
}


//////////////////////////////////////////////////////////////////////////////
// PARTIE GESTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

//////////////// Q09 : A COMPLETER (DEBUT) ////////////////
// ... m4_divert(-1)

// Création de l'objet vue
$view = new View('main.view.php');

// Nombre de produits total de la base
$view->nbProduct = $dao->nbProduct();

// No de la page courante
$view->page = $page;

// No de la première page de l'interval
$view->pageMin = $pageMin;

// No de la dernière page de l'interval
$view->pageMax = $pageMax;

// Informations du filtre
$view->filter = $filter;
$view->value = $value;

// Crée un attribut products pour stocker la liste des objets à afficher dans la vue
$view->products = array();

// Demande le nombre de produits
$products = $dao->getProductList($page,$nbProductPage,$filter,$value);

// Passage des valeurs à placer dans la vue
foreach ($products as $p) {
  $prod = new stdClass;
  $prod->code = $p->getCode();
  $prod->url = $p->getUrl();
  $prod->product_name = $p->getProduct_name();
  $prod->image_small_url = $p->getImage_small_url();

  // Ajoute ce produit pour l'affichage
  $view->products[] = $prod;
}



// Appel la vue
$view->show();

//m4_divert(0)

//////////////// Q09 : A COMPLETER (FIN)   ////////////////

?>
