<?php
// Active l'arret apres une assertion fausse
assert_options(ASSERT_BAIL,true);

// Test de la classe DAO
require_once("../model/DAO.class.php");
$dao = new DAO;

// Récupère le nombre de produits de la base de données
$nb = $dao->nbProduct();

assert($nb == 1000,"Erreur dans \$dao->nbProduct(), valeur incorrecte '$nb'");

echo "Resultat du test DAO 07: OK\n";
 ?>
