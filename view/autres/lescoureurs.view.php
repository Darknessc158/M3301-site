<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../view/css/main.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body style="text-align:center; background-color: #FFFFEE;">

  <div class="boximg" style="margin-bottom:0">
    <p class="box">
      <img class="scroll" src="../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
      <!--<img class="scroll" src="../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
      <img class="scroll" src="../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">-->
    </p>
  </div>

  <script type="text/javascript">
  I = 0 ;
  Imax = document.images.length - 1 ;
  setTimeout(suivante, 7000) ;
  function suivante()
  {
    document.images[I].style.display = "none" ;
    if ( I < Imax )
    I++;
    else
    I=0;
    document.images[I].style.display = "block";
    setTimeout(suivante, 7000) ;
  }
  </script>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="display:flex; flex-wrap:wrap;">
    <a class="navbar-brand" href="main.view.php"> <img src="../model/data/images/logo-scale.jpg" alt=""></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/accueil.view.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/actualites.view.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/lebureau.view.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/lescoureurs.view.php">Les coureurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/histoireclub.view.php">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/contact.view.php">Nous contacter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/page administrateur/admin.view.php">Page administrateur</a>
        </li>
      </ul>
    </div>
  </nav>


<h1>Les coureurs en <?php   echo date('Y');?></h1>
<div class="container">
<?php foreach ($lesadh as $coureur) {
    echo '<div style="border-bottom:1px solid gray; border-radius:100px; margin:auto; margin-bottom:20px;">';
    echo '<div class="element" style="background-image:url('.$coureur->getUrlPhoto().'); background-size:cover;">';
    echo "</div>";
    echo '<p>'.$coureur->getPrenom().' '.$coureur->getNom().'</p>';
    echo '<p> Catégorie : '.$coureur->getCategorie().'</p>';
    echo "</div>";
} ?>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>
