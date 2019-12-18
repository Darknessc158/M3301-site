<?php
// Active l'arret apres une assertion fausse
assert_options(ASSERT_BAIL,true);

// Test de la classe DAO
require_once("../model/DAO.class.php");
$dao = new DAO;

// Récupère la première page
$page = 3;
$pageSize = 7;
$produits = $dao->getProductList($page,$pageSize);
$nb = $dao->nbProduct();

print("Il y a $nb produits dans la base.\n\n");
print("Voici la liste des $pageSize produits de la page No $page :\n");
$id = ($page-1)*$pageSize+1;
foreach ($produits as $produit) {
  print($id.' '.$produit->getProduct_name()."\n");
  $id++;
}

 ?>
