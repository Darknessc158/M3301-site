<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/histoireclub.view.css" rel="stylesheet">
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
      <p class="box carousel-inner">
        <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
        <img class="scroll" src="../../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
        <img class="scroll" src="../../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
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
  <a class="navbar-brand" href="../controler/accueil.ctrl.php"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="logo scale Echirolles" width="60%"></a>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../accueil.ctrl.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Actualités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Le bureau</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../lescoureurs.ctrl.php">Les coureurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="..tablehistoireclub/tablehistoireclub.ctrl.php">Histoire du club</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../view/autres/contact.view.php">Nous contacter</a>
      </li>
    </ul>
    <form action="../auth/login.ctrl.php" method="get" class="ml-auto">
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
  <body>
    <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-dark waves-effect filter" data-rel="all">Tout</button>
    <button type="button" class="btn btn-outline-dark waves-effect filter" data-rel="2001">2001</button>
    <button type="button" class="btn btn-outline-dark waves-effect filter" data-rel="2002">2002</button>

  </div>


</div>


<div class="gallery text-center" id="gallery">
  <?php foreach ($reshist as $uneHistoire){ ?>
    <div class="mb-3 pics animation all <?=$uneHistoire->getAnnee();?>">
      <img class="img-fluid text-center" src="../../model/data/images/histoireclub/<?=$uneHistoire->getImage();?>" alt="<?=$uneHistoire->getImage();?>">
    </div>
  <?php } ?>


</div>
<!-- Grid row -->
<script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
