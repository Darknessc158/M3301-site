<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');



$publications = new publicationDAO();

$lespublications = $publications->getLesArticlesBlog();

if (isset($_GET['action'])) { //gestion numero de la page
  $action = $_GET['action'];
  if ($action == 'next') {
    $idPage = $idPage++;
  }
  if ($action == 'prev') {
    if ($idPage <= 1){
      $idPage = 1;
    }else{
      $idPage = $idPage--;
    }
  }
}else{
  $idPage = 1;
}

//gestion publication a afficher en fonction de la page
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
  }else{ // on recalcul avec l'idPage d'avant
    $idPage =$idPage--;
    $start = ($idPage-1)*4;//on recalcul
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



include('../../view/actualite/actualites.view.php');

 ?>
