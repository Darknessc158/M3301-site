<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/blog.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

  <!--Image bandeau haut-->
  <div class="boximg">
    <p class="box">
      <img class="" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="vertical-align:middle;">
    </p>
  </div>

  <!Nav-->
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
    </div>
  </nav>
  <!--Nav-->

  <?php setlocale(LC_ALL, 'fra_fra'); //Date en francais
  $date = strtotime($publication->getDatePublication());?>

  <h1>Les Actualités du club</h1>
<div class="">
  <h3><?php  echo $publication->getTitre(); ?></h3>
  <p class="datepublication"> Publié le <?php echo utf8_encode(strftime("%e %B %Y",$date)); ?> </p>
  <?php echo $publication->getDescription(); ?>
  <?php $titre =  $publication->getTitre();
        $str = $publication->getContent();
        if ($str != '') { //il y a des images
          $tab = explode('/',$str); ?>
          <i class="fas fa-arrow-circle-right" id="next" ></i>
          <div class="boximg">
            <p class="box">
        <?php $length = sizeof($tab);
        for ($i=0; $i < $length ; $i++) {
          if ($i == 0){ ?>
            <img class="scroll" src="../../model/data/images/imagesblog/<?=$titre?>/<?=$tab[$i]?>" alt="" style="display:block;">
        <?php  } else { ?>
            <img class="scroll" src="../../model/data/images/imagesblog/<?=$titre?>/<?=$tab[$i]?>" alt="" style="display:none;">
          <?php }  ?>
      <?php   } ?>
            </p>
          </div>
      <?php } ?>
</div>


</body>
<script>//click sur la photo
  I = 0 ;
  document.getElementById('next').onclick = function(){
  Imax = document.getElementsByClassName("scroll").length - 1 ;
  var elements =  document.getElementsByClassName("scroll");
  elements[I].style.display = "none" ;
  if ( I < Imax )
  I++;
  else
  I=0;
  elements[I].style.display = "block";
};
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
