<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../view/css/main.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>
    <a id="boutontop"></a>

  <header>
    <!--Image bandeau haut-->
    <div class="boximg">
      <p class="box">
        <img class="scroll" src="../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
        <img class="scroll" src="../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
        <img class="scroll" src="../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
      </p>
    </div>

<!--Nav-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <button class="navbar-toggler" data-toggle = "collapse" data-target = "#collapse_target">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapse_target">
  <a class="navbar-brand" href="../controler/accueil.ctrl.php"> <img src="../model/data/images/images_sites/logo-scale.jpg" alt="logo scale Echirolles" width="60%"></a>


    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../controler/accueil.ctrl.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../controler/actualite/touteslesactualites.ctrl.php">Actualités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../controler/lebureau.ctrl.php">Le bureau</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../controler/lescoureurs.ctrl.php">Les coureurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../controler/tablehistoireclub/tablehistoireclub.ctrl.php">Histoire du club</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../view/autres/contact.view.php">Nous contacter</a>
      </li>
    </ul>
    <form action="../controler/auth/login.ctrl.php" method="get" class="ml-auto">
      <div class="input-group mb-3">

        <button class="btn btn-success my-2 my-sm-0" type="submit"><?php echo $etat; ?></button>
      </div>
    </form>
  </div>

</nav>
<!--Nav-->
</header>
<!--Fin header-->
<div class="all">


<p>
  <a class="bouton" href="#bouton"><i class="fas fa-angle-double-down fa-2x" title="Vers bas de page."></i></a>
</p>


<div class="container centergauche">

<div class="container">
  <div class="row">
    <div class="col-sm" >
      <h1 class="titre">Rejoignez-nous ! </h1>
      <div class="container">
        <div class="elementqsn">
          <h3 class = "sous_Titre">Qui sommes nous ?</h3>
          <p>Le Sprint Club Amicale Laïque Echirolles (SCALE) est une association sportive de cyclisme.</p>
          <p>Nous sommes une vingtaine d'adhérents dont 17 coureurs.</p>
          <p>Si vous aimez le cyclisme, que vous aimez rouler en groupe et vous mesurez à d'autres... alors n'attendez plus rejoignez le SCALE Echirolles ! <i class="far fa-smile-wink"></i></p>
          <p>Vous pourrez déjà faire une première sortie découverte avec nous.</p>
          <p>Venez nous rejoindre le week-end ou même le mercredi après-midi pour rouler en petit comité.
          Les courses auxquelles vous pourrez participer, dont celles organisées par le club, se déroulent tous les ans d'avril à octobre sous l'égide de l'Ufolep ou de la FFC.</p>
        </div>
        <div class="infos">
          <h5 class = "sous_Titre">Informations pratiques</h5>
          <p>Adhésion au SCALE : 30 € échirollois - 40 € extérieurs.</p>
          <p>Licence suivant l'âge.</p>
          <p>Réunion les 1ers mardis de chaque mois à 20 h au siège du S.C.A.L.E.,
            Gymnase Auguste Delaune, 9 rue Manouchian - 38130 Echirolles.</p>
          </p>
        </div>
      </div>


    </div>
    <div class="col-sm">
      <div >

        <div class="sponsors">
          <h5 class = "sous_Titre">Nos sponsors</h5>
          <a href="https://piecesaccessoiresvelo.fr/">
          <img src="../model/data/images/images_sites/sponsor_pieces.png" alt="" width="60%">
          </a>
          <a href="https://www.gites-de-france-isere.com/">
          <img src="../model/data/images/images_sites/sponsor_gite.jpg" alt="" width="50%">
          </a>
        </div>
        <div class="localisation">
          <h5 class = "sous_Titre">Retrouvez-nous !</h5>
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1AknAsXQlGn_Si6Ydd5zXAqj6hp_mXRe-" height="280" style="max-width:98%"></iframe>
        </div>
      </div>

    </div>

  </div>

</div>


  <h2 class = "sous_Titre">Notre programme d'entrainement</h2>
  <div class="container">

    <div class="element">
      <h3 class = "sous_Titre">Les entrainements</h3>
      <p>Entrainements tous les mercredis et samedis à 14 h (hors saison hivernale)
        avec possibilité de décaler l'heure et le jour en fonction des jours de compétition et de la météo.
      </p>
      <p>RDV : Gymnase Joliot Curie - Avenue Frédéric Joliot Curie - 38130 Echirolles ou vélodrôme d'Eybens.</p>
      <p>Toutes les sorties et activités seront encadrées par des éducateurs et entraîneurs diplômés.</p>
    </div>

    <div class="element">
      <h3 class = "sous_Titre">Les types d'activités</h3>
      <p>Epreuves de maniabilité et séances de PPG dans le gymnase (hiver)</p>
      <p> Sorties sur route (après évaluation des capacités de bonne tenue sur un vélo)</p>
      <p>Sortie piscine, Sortie de ski de fond (hiver)</p>
      <p>Sortie de club (retrouvailles de tous les coureurs)</p>
    </div>
  </div>
  <div class="container">
    <img src="../model/data/images/accueil/entrainement_depart2.jfif" alt="" title="Départ Joliot Curie" width="65%" height="auto">
  </div>

</div><!--Fin des deux div gauche et droite-->

  <h3 class = "sous_Titre" style="text-align:center; margin-bottom: 20px;">Les stages</h3>
    <div class="containerstage" style="border: 8px solid white;">
      <h5 class = "sous_Titre">Stage de cohésion : Un peu de vélo, beaucoup de bonne humeur !</h5>
      <div class="container">
      <img src="../model/data/images/accueil/stage1_cohesion1.JPG" alt="" title="La Robine" style="max-width:40%; height:auto; margin-bottom:10px;">
      <img src="../model/data/images/accueil/stage1_cohesion2.JPG" alt="" title="La Robine" style="max-width:40%; height:auto; margin-bottom:10px;">
      <img src="../model/data/images/accueil/stage1_depart.JPG" alt="" title="La Robine" style="max-width:40%; height:auto; margin-bottom:10px;">
      <img src="../model/data/images/accueil/depart_ventoux.JPG" alt="" title="Départ Mont Ventoux" style="max-width:40%; height:auto; margin-bottom:10px;">
      </div>
    </div>
    <div class="containerstage" style="border: 8px solid white;">
      <h5 class = "sous_Titre">Stage de présaison : Préparer la saison et découvrir de nouveaux horizons !</h5>
      <div class="container">
      <img src="../model/data/images/accueil/stage2_depart.JPG" alt="" class="rounded float-left"title="Veyne" style="width:500px; height:auto; margin-bottom:10px;object-fit: cover;">
      <img src="../model/data/images/accueil/stage2_noyer.jpg" alt="" class="rounded float-right"title="Col du noyer" style="max-width:500px; height:auto;object-fit: cover;">
      </div>
    </div>


  <h2 class = "sous_Titre">Les événements du SCALE</h2>
  <div class="container">
    <div class="elementphoto">
      <img src="../model/data/images/accueil/loto.jpg" alt="" width="95%">
    </div>
    <div class="element">
      <h3 class = "sous_Titre">Le "SAVE THE DATES" du club</h3>
      <p>Assemblée Générale du SCALE : mi-novembre </p>
      <p>Loto du SCALE : début-décembre </p>
      <p>Tirage des rois et signature des licences : début-janvier </p>
      <p>Grand prix de Lalley : début-mai </p>
      <p>Grimpée du col de L'Arzelier : fin-septembre </p>
    </div>
    <div class="elementphoto">
      <img src="../model/data/images/accueil/tiragedesrois.JPG" alt="" width="95%">
    </div>
  </div>

      <h2 class = "sous_Titre">Les courses organisées par le club</h2>
      <div class="container">
      <div class="elementphoto">
        <img src="../model/data/images/accueil/grandprixdelalley.jpg" alt="" width="95%">
      </div>
      <div class="elementphoto">
        <img src="../model/data/images/accueil/arzelier.jpg" alt="" width="95%">
      </div>
    </div>

  <h2 class = "sous_Titre">Les chiffres clefs du SCALE</h2>
  <div class="container">
    <div class="elementphoto">
    <img src="../model/data/images/accueil/Image1.png" alt="" width="95%">
    </div>
    <div class="element" style="height:250px; margin:auto; margin-top:0px;">
      <h3 class = "sous_Titre"><strong>2019 :</strong></h3>
      <p><strong>137 départs de course pour les coureurs du club.</strong></p>
      <p><strong>14 victoires et 23 podiums.</strong></p>
      <p><strong>Plus de 180 participants aux départs des courses organisées par le club.</strong> </p>
    </div>
    <div class="elementphoto">
    <img src="../model/data/images/accueil/Image2.jpg" alt="" width="95%">
    </div>
    <div class="elementphoto">
    <img src="../model/data/images/accueil/Image3.jpg" alt="" width="95%">
    </div>
    <div class="elementphoto">
    <img src="../model/data/images/accueil/arzelier_depart.JPG" alt="" width="95%">
    </div>
    <div class="elementphoto">
    <img src="../model/data/images/accueil/Image4.jpg" alt="" width="95%">
    </div>
  </div>

  <h2 class = "sous_Titre">Le coin Strava</h2>
  <div class="containerstrava" style="justify-content:center; width: 55%;">
    <div class="stravaelement">
      <h4>Les activités du club</h4>
      <iframe allowtransparency frameborder='0' height='380' scrolling='no' src='https://www.strava.com/clubs/62426/latest-rides/d3aa846eaa79ed7b80724cc810c4ef256b18f568?show_rides=true' width='200'></iframe>
    </div>
    <div class="stravaelement">
      <h4>Zoom sur les stats</h4>
      <iframe allowtransparency frameborder='0' height='160' scrolling='no' src='https://www.strava.com/clubs/62426/latest-rides/d3aa846eaa79ed7b80724cc810c4ef256b18f568?show_rides=false' width='300'></iframe>
    </div>
  </div>

    <a id="bouton"></a>
  <div class="container" style="background-color:white;">
    <h2 class = "sous_Titre">Planning entrainements et courses</h2>
    <iframe src="https://calendar.google.com/calendar/embed?src=bernabeaurelien%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
  </div>

  <p>
    <a href="#boutontop"><i class="fas fa-angle-double-up fa-2x" title="Vers haut de page."></i></a>
  </p>

</div>
<?php include('../controler/visiteurSite/visitor_tracking.ctrl.php'); ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
  </html>
