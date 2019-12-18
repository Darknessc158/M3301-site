<?php
require_once("Product.class.php");

// Test sur un produit
$productTestArray = array('0000007730009',
      'http://world-fr.openfoodfacts.org/produit/0000007730009/biscuits-sables-fourrage-au-cacao-st-michel',
      'Biscuits sablés fourrage au cacao',
      '1 kg',
      'St Michel',
      'http://fr.openfoodfacts.org/images/products/000/000/773/0009/front.6.400.jpg',
      'http://fr.openfoodfacts.org/images/products/000/000/773/0009/front.6.200.jpg',
      'Snacks sucrés,Biscuits et gâteaux,Biscuits,Sablés',
      'Sucre, farine de _Blé_, graisse et huiles végétales (karité, colza et tournesol), cacao maigre en poudre 7%, sirop de glucose, dextrine, _Beurre_ concentré, _Oeufs_, pâte de _Noisette_, pâte de cacao, émulsifiants : lécithines (colza et tournesol), sel, poudre à lever : carbonates d\'ammonium, arômes.',
      'Sablés',
      'E1400 - Dextrines,E322 - Lécithines,E503 - Carbonates d\'ammonium'
    );

// Creation d'une instance
$p = new Product($productTestArray);

// Vérification du contenu de l'instance
//var_dump($p);

var_dump($p->getCategories_fr());

// Test sur l'acces aux additifs

// Valeur que l'on doit retourner
$toReturn = array (
  "E1400"=> "Dextrines",
  "E322" => "Lécithines",
  "E503" => "Carbonates d'ammonium"
);

assert(($p->getAdditives_fr() == $toReturn),"ERREUR sur le retour de getAdditives_fr()");

echo "Resultat du test Product: OK\n";

 ?>
