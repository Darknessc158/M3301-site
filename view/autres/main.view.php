<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/main.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

  <div class="boximg" style="margin-bottom:0">
    <p class="box">
      <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
      <img class="scroll" src="../../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
      <img class="scroll" src="../../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
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
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" width="60%"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="main.view.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actualites.view.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lebureau.view.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lescoureurs.view.php">Les coureurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="histoireclub.view.php">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.view.php">Nous contacter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../view/page administrateur/admin.view.php">Page administrateur</a>
        </li>
      </ul>
    </div>
  </nav>


<h1>Rejoignez-nous ! </h1>
  <div class="container">
    <div class="element">
      <h3>Qui sommes nous ?</h3>
      <p>Scale Echirolles est une association sportive de cyclisme.
      Nous sommes une vingtaine d'adhérents composés de 17 coureurs.
      Si vous aimez le cyclisme (se faire plaisir en roulant avec des amis) alors n'attendez plus SCALE Echirolles est fait
      pour vous ! Venez nous rejoindre le week-end ou même le mercredi après-midi pour rouler en petit comité.
      Vous pourrez aussi participer à plusieurs courses dont notamment celles organisées par le club sous l'égide de l'UFOLEP
      ainsi que de la FFC.
    </p>
    </div>
    <div class="element">
      <h3>Notre programme d'entrainements</h3>
      <h4>Les entrainements :</h4>
      <p>Entrainements tous les mercredis et samedis à 14 h (hors saison hivernale)
        avec possibilité de décaler l'heure et le jour en fonction des jours de compétition et du temps.
      </p>
      <h4>Les stages :</h4>
      <p>Stage de présaison, stage de cohésion, ...</p>
    </div>
    <div class="element">
      <h3>Les dates clefs du club</h3>
      <p>Assemblée Générale du SCALE : 17/11/18 </p>
      <p>Loto du SCALE : 08/12/18 </p>
      <p>Tirage des rois et signature des licences : 11/01/19 </p>
      </div>
        <div class="element">
          <h3>Les courses organisées par le club</h3>
          <p>Le Grand Prix de Lalley</p>
          <p>La Montée du col de l'Arzelier</p>
        </div>
      <div class="element">
        <h3>Quelques chiffres du SCALE</h3>
        <p>Victoires ...</p>
      </div>
      <div class="element">
        <h3>Nos sponsors</h3>
        <p>Retrouvez ici nos sponsors :</p>
        <img src="../../model/data/images/images_sites/sponsor_gite.jpg" alt="" width="30%">
        <img src="../../model/data/images/images_sites/sponsor_pieces.png" alt="" width="30%">
      </div>
      </div>

      <p id="separator">-----------------------------------------------------------------------------------------</p>
      <h2>Le coin Strava</h2>
      <div class="container2">
      <div class="elementact">
          <h3>Les activités du club</h3>
          <iframe allowtransparency frameborder='0' height='454' scrolling='no' src='https://www.strava.com/clubs/62426/latest-rides/d3aa846eaa79ed7b80724cc810c4ef256b18f568?show_rides=true' width='200'></iframe>
      </div>
      <div class="elementstats">
        <h4>Zoom sur les stats</h4>
        <iframe allowtransparency frameborder='0' height='160' scrolling='no' src='https://www.strava.com/clubs/62426/latest-rides/d3aa846eaa79ed7b80724cc810c4ef256b18f568?show_rides=false' width='300'></iframe>
      </div>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>
