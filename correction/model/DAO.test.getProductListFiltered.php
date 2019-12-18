<?php
// Active l'arret apres une assertion fausse
assert_options(ASSERT_BAIL,true);

// Test de la classe DAO
require_once("../model/DAO.class.php");
$dao = new DAO;

// Choisit des pages et une taille de page
$page = 2;
$pageSize = 12;
$brands = 'Marks & Spencer';
$produits = $dao->getProductList($page,$pageSize,'brands',$brands);
$nb = $dao->nbProduct('brands',$brands);

print("Il y a $nb produits de la marque '$brands'\n");

$id = ($page-1)*$pageSize+1;
foreach ($produits as $produit) {
  print($id.' '.$produit->getProduct_name()."\n");
  $id++;
}

// Filtrage par categorie
$page = 1;
$pageSize = 15;
$main_category_fr='Plats préparés';
//$main_category_fr="Sodas";
$produits = $dao->getProductList($page,$pageSize,'main_category_fr',$main_category_fr);
$nb = $dao->nbProduct('main_category_fr',$main_category_fr);

print("\nIl y a $nb produits de la categorie '$main_category_fr'\n");

$id = ($page-1)*$pageSize+1;
foreach ($produits as $produit) {
  print($id.' '.$produit->getProduct_name()."\n");
  $id++;
}

 ?>
