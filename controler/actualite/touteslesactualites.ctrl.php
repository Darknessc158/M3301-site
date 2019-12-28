<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');

$idPage = 1;

$publications = new publicationDAO();

$lespublications = $publications->getLesArticlesBlog();

var_dump($lespublications);

if (isset($_GET['page'])){ //pagination blog
  $idPage = $_GET['page'];
}
if (isset($_GET['Action'])) {
  $action = $_GET['action'];
  if ($action == 'next') {
    $idPage = $idPage+1;
  }
  if ($action == 'prev') {
    $idPage = $idPage-1;
  }
}
$end = ($idPage*4)-1;
$start = ($idPage-1)*4;
if (array_key_exists($end,$lespublications)){
  $lespublications = $publications->pagination($start,$end);
}

  var_dump($lespublications);

include('../../view/actualite/actualites.view.php');

 ?>
