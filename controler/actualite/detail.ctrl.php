<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');


$publications = new publicationDAO();

$publication = $publications->getUnArticleBlog($_GET['idpublication']);


include('../../view/actualite/actualitedetails.view.php');

 ?>
