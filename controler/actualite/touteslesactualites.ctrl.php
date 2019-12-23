<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');


$publications = new publicationDAO();

$lespublications = $publications->getLesArticlesBlog();

include('../../view/actualite/actualites.view.php');

 ?>
