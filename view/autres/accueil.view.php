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

  <header>
    <!--Image bandeau haut-->
    <div class="boximg">
      <p class="box">
        <img class="scroll" src="../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
        <img class="scroll" src="../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
        <img class="scroll" src="../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
      </p>
    </div>
    <!--Script defilement voir après.
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
<!--Image bandeau haut-->
<!--Nav-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="main.view.php"> <img src="../model/data/images/images_sites/logo-scale.jpg" alt="logo scale Echirolles" width="60%"></a>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../controler/accueil.ctrl.php">Accueil</a>
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
        <a class="nav-link" href="../controler/auth/profilAdmin.ctrl.php">Page administrateur</a>
      </li>
    </ul>
    <form action="../controler/auth/login.ctrl.php" method="get" class="ml-auto">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <button class="btn btn-success my-2 my-sm-0" type="submit"><?php echo $etat; ?></button>
      </div>
    </form>
  </div>
</nav>
<!--Nav-->
</header>
<!--Fin header-->
<div class="all">



<div class="droite">
  <div class="infos">
    <h5 class = "sous_Titre">Informations pratiques</h5>
    <p>Adhésion au SCALE : 30 € échirollois - 40 € extérieurs.</p>
    <p>Licence suivant l'âge.</p>
    <p>Réunion les 1ers mardis de chaque mois à 20 h au siège du S.C.A.L.E.,
      Gymnase Auguste Delaune, 9 rue Manouchian - 38130 Echirolles.</p>
    </p>
  </div>
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


<div class="centergauche">



  <h1 class="titre">Rejoignez-nous ! </h1>
  <div class="container">
    <div class="elementqsn">
      <h3 class = "sous_Titre">Qui sommes nous ?</h3>
      <p>Scale Echirolles est une association sportive de cyclisme.</p>
      <p>Nous sommes une vingtaine d'adhérents composés de 17 coureurs.</p>
      <p>Si vous aimez le cyclisme et encore plus accompagné alors n'attendez plus SCALE Echirolles est fait
      pour vous ! <i class="far fa-smile-wink"></i></p>
      <p>Venez nous rejoindre le week-end ou même le mercredi après-midi pour rouler en petit comité.
      Vous pourrez aussi participer à plusieurs courses dont notamment celles organisées par le club sous l'égide de l'UFOLEP
      ainsi que de la FFC.</p>
    </div>
  </div>

  <p id="separator">--------------------------------------------------------------------------------------</p>
  <h2 class = "sous_Titre">Notre programme d'entrainements</h2>
  <div class="container">

    <div class="element">
      <h3 class = "sous_Titre">Les entrainements</h3>
      <p>Entrainements tous les mercredis et samedis à 14 h (hors saison hivernale)
        avec possibilité de décaler l'heure et le jour en fonction des jours de compétition et du temps.
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

  <p id="separator">--------------------------------------------------------------------------------------</p>
  <h3 class = "sous_Titre" style="text-align:center; margin-bottom: 20px;">Les stages</h3>
    <div class="containerstage">
      <h5 class = "sous_Titre">Stage de cohésion (un peu de vélo, beaucoup d'amusement !)</h5>
      <div class="container">
      <img src="../model/data/images/accueil/stage1_cohesion1.JPG" alt="" title="La Robine" style="max-width:40%; height:auto; margin-bottom:10px;">
      <img src="../model/data/images/accueil/stage1_cohesion2.JPG" alt="" title="La Robine" style="max-width:40%; height:auto; margin-bottom:10px;">
      <img src="../model/data/images/accueil/stage1_depart.JPG" alt="" title="La Robine" style="max-width:40%; height:auto; margin-bottom:10px;">
      </div>
    </div>
    <div class="containerstage">
      <h5 class = "sous_Titre">Stage de présaison (Un peu plus de vélo et avec plaisir !)</h5>
      <div class="container">
      <img src="../model/data/images/accueil/stage2_depart.JPG" alt="" title="Veyne" style="max-width:40%; height:auto; margin-bottom:10px;">
      <img src="../model/data/images/accueil/stage2_noyer.jpg" alt="" title="Col du noyer" style="max-width:60%; height:auto;">
      </div>
      <p>Le stage de présaison est là pour peaufiner l'entrainement du début de saison afin d'atteindre un bon niveau pour
      les compétitions les plus importantes à venir. Ce type de stage est souvent organisé au mois d'avril-mai.</p>
    </div>

  <p id="separator">--------------------------------------------------------------------------------------</p>
  <h2 class = "sous_Titre">Les événements du SCALE</h2>
  <div class="container">
    <div class="elementphoto">
      <img src="../model/data/images/accueil/loto.jpg" alt="" width="95%">
    </div>
    <div class="element">
      <h3 class = "sous_Titre">Les dates clefs du club</h3>
      <p>Assemblée Générale du SCALE : mi-novembre </p>
      <p>Loto du SCALE : début-décembre </p>
      <p>Tirage des rois et signature des licences : début-janvier </p>
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

  <p id="separator">--------------------------------------------------------------------------------------</p>
  <h2 class = "sous_Titre">Quelques chiffres du SCALE</h2>
  <div class="container">
    <div class="element">
      <h3 class = "sous_Titre">Victoires ...</h3>
      <p>Le SCALE c'est tant de victoires podiums ...</p>
    </div>
  </div>

  <h2 class = "sous_Titre">Le coin Strava</h2>
  <div class="containerstrava">
    <div class="stravaelement">
      <h3 class = "sous_Titre">Les activités du club</h3>
      <iframe allowtransparency frameborder='0' height='380' scrolling='no' src='https://www.strava.com/clubs/62426/latest-rides/d3aa846eaa79ed7b80724cc810c4ef256b18f568?show_rides=true' width='200'></iframe>
    </div>
    <div class="stravaelement">
      <h4>Zoom sur les stats</h4>
      <iframe allowtransparency frameborder='0' height='160' scrolling='no' src='https://www.strava.com/clubs/62426/latest-rides/d3aa846eaa79ed7b80724cc810c4ef256b18f568?show_rides=false' width='300'></iframe>
    </div>
  </div>

  <p id="separator">--------------------------------------------------------------------------------------</p>
  <div class="container" style="background-color:white;">
    <h2 class = "sous_Titre">Planning entrainements et courses</h2>
    <iframe src="https://calendar.google.com/calendar/embed?src=bernabeaurelien%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
  </div>






</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
  </html>
