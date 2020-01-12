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

$idPage = 1; //variable pour lidentifiant en bas de la page

$title = $_POST["title"]; //Recuperation titre de l'article
$editor_data = $_POST["editeur"]; //Recuperation des donnees textarea
$date = date('Y-m-d'); //Recuperation de la date de publication

if (isset($_GET['modif'])) {
  $date = $_POST['date']; //recup date d'avant si c'est une modification de l'article
}

//Créer un dossier pour enregistrer les photos de l'article.
if (!file_exists("../model/data/images/imagesblog/$date/") && ($_FILES['files']['name'] != '')) {
  @mkdir("../../model/data/images/imagesblog/$date/");
}

$valid_formats = array("jpg", "png", "gif", "zip", "bmp","jfif","JPG","JPEG");
$max_file_size = 10000*10000; //10000 kb
$path = "../../model/data/images/imagesblog/$date/"; // Upload directory
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
}else{ //il y a des images
  $content = implode("/",$tab[0]);
}


//if isset modification
if (isset($_GET['modif'])) {
  $publications->supprimerUnArticleBlog($_GET['idPublication']);
  if ($_POST['content'] == 'aucunes'){
    $content = $content;
  }else{ //on garde les images d'avant
    if ($content != '') {
      $content = $_POST['content'].'/'.$content;
    }else{
      $content = $_POST['content']; // on garde que le contenu d'avant
    }
  }
}

//insertion des donnees dans la bd
$publications->insertArticle($title,$editor_data,$content,$date);

//on recupere tous les articles pour les afficher dans la vue
$lespublications = $publications->getLesArticlesBlog();

include('../../view/actualite/actualites.view.php');

?>
