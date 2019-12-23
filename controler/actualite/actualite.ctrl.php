<?php
require_once('../../model/classPublication/publication.class.php');
require_once('../../model/classPublication/publicationDAO.class.php');


$publications = new publicationDAO();

$title = $_POST["title"]; //Recuperation titre de l'article
$editor_data = $_POST["editeur"]; //Recuperation des donnees textarea

//Créer un dossier pour enregistrer les photos de l'article.

if (!file_exists("../model/data/images/imagesblog/$title/")) {
  @mkdir("../../model/data/images/imagesblog/$title/");
}

$valid_formats = array("jpg", "png", "gif", "zip", "bmp","jfif","JPG","JPEG");
$max_file_size = 4000*4000; //100 kb
$path = "../../model/data/images/imagesblog/$title/"; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
    // Loop $_FILES to execute all files
    foreach ($_FILES['files']['name'] as $f => $name) {
        if ($_FILES['files']['error'][$f] == 4) {
            continue; // Skip file if any error found
        }
        if ($_FILES['files']['error'][$f] == 0) {
            if ($_FILES['files']['size'][$f] > $max_file_size) {
                $message[] = "$name is too large!.";
                continue; // Skip large files
            }
            elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                $message[] = "$name is not a valid format";
                continue; // Skip invalid file formats
            }
            else{ // No error found! Move uploaded files
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
                    $count++; // Number of successfully uploaded files
                }
            }
        }
    }
}
$tab[] = $_FILES['files']['name'];
if ($tab[0] == '') { //pas de contenu
  $content = '';
}else{ //il y a des images/contenus
  $content = implode("/",$tab[0]);
}

setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1'); //date en francais
$datePublication = utf8_encode(strftime("%A %d %B %Y"));//pour bien afficher les caractères spéciaux

//insertion des donnees dans la bd
$publications->insertArticle($title,$editor_data,$content,$datePublication);

$lespublications = $publications->getLesArticlesBlog();

include('../../view/actualite/actualites.view.php');

?>
