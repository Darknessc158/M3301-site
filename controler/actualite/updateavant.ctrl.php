<?php

require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');


$publications = new publicationDAO();

$publication = $publications->getUnArticleBlog($_GET['idPublication']);

if ($publication->getContent() != '' ) {
  $content = $publication->getContent();
}else {
  $content = 'aucunes';
}

include('../../view/actualite/formupdate.view.php')
 ?>
