<?php
// Inclusion de la classe View du framework
include('../framework/view.class.php');

// Fonction utilitaire qui crée un objet standard avec les attributs utiles pour la vue
// Simplifie le code de la création de ces objets
function newProduct(string $code, string $url, string $product_name, string $image_small_url): stdClass
{
  // Création d'un objet standard avec les attributs utiles pour la vue
  $product = new stdClass;
  $product->code = $code;
  $product->url = $url;
  $product->product_name = $product_name;
  $product->image_small_url = $image_small_url;
  // Retourne le nouvel objet créé
  return $product;
}

// Création de l'objet vue
$view = new View('main.view.php');

// Placement des valeurs de la vue


// L'attribut 'products' est un tableau d'objets standards
$view->products = array();

// Ajoute quelques produits dans ce tableau (avec la fonction du dessus)
$view->products[0] = newProduct(
  '0000007730009',
  'http://world-fr.openfoodfacts.org/produit/0000007730009/biscuits-sables-fourrage-au-cacao-st-michel',
  'Biscuits sablés fourrage au cacao',
  'http://fr.openfoodfacts.org/images/products/000/000/773/0009/front.6.200.jpg'
);

$view->products[1] = newProduct(
  '0000010127735',
  'http://world-fr.openfoodfacts.org/produit/0000010127735/sirops-pour-ganache-macarons-alice-delice',
  'Sirops pour ganache macarons',
  'http://fr.openfoodfacts.org/images/products/000/001/012/7735/front.7.200.jpg'
);

$view->products[2] = newProduct(
  '0000027533024',
  'http://world-fr.openfoodfacts.org/produit/0000027533024/luxury-christmas-pudding-asda',
  'Luxury Christmas Pudding',
  'http://fr.openfoodfacts.org/images/products/000/002/753/3024/front.9.200.jpg'
);

// Valeur statique pour le test
$view->nbProduct = count($view->products);

// No de la page courante
$view->page = 1;

// No de la première page de l'interval
$view->pageMin = 1;

// No de la dernière page de l'interval
$view->pageMax = 1;

// Valeur selectionnée dans le filtre
$view->filter = 'none';
$view->value = '';


// Affiche la vue pour finir
$view->show();

?>
