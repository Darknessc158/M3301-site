<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');

$idPage = 1;

$publications = new publicationDAO();

$lespublications = $publications->getLesArticlesBlog();

if (isset($_GET['page'])){ //pagination blog
  $idPage = $_GET['page'];
}
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  if ($action == 'next') {
    $idPage = $idPage+1;
  }
  if ($action == 'prev') {
    if ($idPage <= 1){
      $idPage = 1;
    }else{
      $idPage = $idPage-1;
    }
  }
}
$start = ($idPage-1)*4;
$end = ($idPage*4)-1;
if (array_key_exists($end,$lespublications)){
  $lespublications = $publications->pagination($start,$end);
}else {
  while (!array_key_exists($end,$lespublications)) {
    $end--;
  }
  if ($end == 0) {
    echo "Plus d'articles";
  }else{
    $lespublications = $publications->pagination($start,$end);
  }
}



include('../../view/actualite/actualites.view.php');

 ?>
