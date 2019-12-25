<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');

$publications = new publicationDAO();

if (isset($_GET['del'])) {
  $publications->supprimerUnArticleBlog($_GET['idPublication']);
}

$lespublications = $publications->getLesArticlesBlog();

include('../../view/actualite/modif.view.php');
 ?>
