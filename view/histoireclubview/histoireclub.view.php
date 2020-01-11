<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <link href="../../view/css/main.view.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <link href="../../view/css/histoireclub.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
$(function () {
$('[data-toggle="popover"]').popover()
})


</script>
<title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

  <header>
    <!--Image bandeau haut-->
    <div class="boximg">
      <p class="box">
        <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
        <img class="scroll" src="../../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
        <img class="scroll" src="../../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
      </p>
    </div>
<!--Nav-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <button class="navbar-toggler" data-toggle = "collapse" data-target = "#collapse_target">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapse_target">
  <a class="navbar-brand" href="../../controler/accueil.ctrl.php"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="logo scale Echirolles" width="60%"></a>


    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../controler/accueil.ctrl.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/actualite/touteslesactualites.ctrl.php">Actualités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/lebureau.ctrl.php">Le bureau</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/lescoureurs.ctrl.php">Les coureurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/tablehistoireclub/tablehistoireclub.ctrl.php">Histoire du club</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../view/autres/contact.view.php">Nous contacter</a>
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
      <img class="img-fluid text-center" src="../../model/data/images/histoireclub/<?=$uneHistoire->getImage();?>" alt="<?=$uneHistoire->getImage();?>" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="<?=$uneHistoire->getDescription();?>">
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
<script>
$('.popover-dismiss').popover({
  trigger: 'focus'
})
</script>
  </body>
</html>
