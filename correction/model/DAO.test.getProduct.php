<?php
// Arrete en cas d'erreur
assert_options(ASSERT_BAIL,1);
// Test de la classe DAO
require_once("../model/DAO.class.php");
$dao = new DAO;

// Récupère un produit à partir de son code
$p1 = $dao->getProduct('0000007730009');

// Produit à retrouver
$productTestArray = array('0000007730009',
"http://world-fr.openfoodfacts.org/produit/0000007730009/biscuits-sables-fourrage-au-cacao-st-michel",
"Biscuits sablés fourrage au cacao",
"1 kg",
"St Michel",
"https://static.openfoodfacts.org/images/products/000/000/773/0009/front_fr.6.400.jpg",
"https://static.openfoodfacts.org/images/products/000/000/773/0009/front_fr.6.200.jpg",
"Snacks sucrés,Biscuits et gâteaux,Biscuits,Sables",
"Sucre, farine de _Blé_, graisse et huiles végétales (karité, colza et tournesol), cacao maigre en poudre 7%, sirop de glucose, dextrine, _Beurre_ concentré, _Oeufs_, pâte de _Noisette_, pâte de cacao, émulsifiants : lécithines (colza et tournesol), sel, poudre à lever : carbonates d'ammonium, arômes.",
"Sables",
"E1400 - Dextrines,E322 - Lécithines,E503 - Carbonates d'ammonium"
);

// Creation d'une instance
$p2 = new Product($productTestArray);

// Vérification que les produits sont les mêmes
assert($p1 == $p2);

echo "Resultat du test ".pathinfo(__FILE__, PATHINFO_FILENAME).": OK\n";
?>
