<?php

require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');


$publications = new publicationDAO();

$publication = $publications->getUnArticleBlog($_GET['idPublication']);

include('../../view/actualite/formupdate.view.php')
 ?>
