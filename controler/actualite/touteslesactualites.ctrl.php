<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');

session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  $etat = "Bienvenue,".$_SESSION["username"];
} else {
  $etat = "Se connecter ou s'inscrire";
}

$publications = new publicationDAO();

$lespublications = $publications->getLesArticlesBlog();

//recuperation de la page courante
if (isset($_GET['page'])) {
  $idPage = $_GET['page'];
}else{
  $idPage = 1;
}

//changement du numero de page en fonction de l'action
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'prev') {
    if ($idPage <= 1) {
      $idPage = 1;
    }else{
      $idPage = $idPage-1;
    }
  }
  if ($_GET['action'] == 'next') {
      $idPage = $idPage+1;
  }
}

//gestion publication a afficher en fonction de la page courante
$start = ($idPage-1)*4;
$end = ($idPage*4)-1;
if (array_key_exists($end,$lespublications)){
  $lespublications = $publications->pagination($start,$end);
}else{
  while (!array_key_exists($end,$lespublications)) {
    $end--;
  }
  if (($end != 0) && ($end >= $start)) {
    $lespublications = $publications->pagination($start,$end);
  }else{ // on recalcul avec l'idPage d'avant si il y a plus de publications
    $idPage =$idPage-1;
    $start = ($idPage-1)*4;
    $end = ($idPage*4)-1;
    if (array_key_exists($end,$lespublications)){
      $lespublications = $publications->pagination($start,$end);
    }else {
      while (!array_key_exists($end,$lespublications)) {
        $end--;
      }
      if (($end != 0) && ($end >= $start)) {
        $lespublications = $publications->pagination($start,$end);
      }
    }
  }
}


include('../../view/actualite/actualites.view.php');

 ?>
