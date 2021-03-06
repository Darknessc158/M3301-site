<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../../view/css/blog.view.css" rel="stylesheet">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

  <header>
    <!--Image bandeau haut-->
    <div class="boximg">
      <p class="box">
        <img class="" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
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

        <button class="btn btn-success my-2 my-sm-0" type="submit"><?php echo $etat; ?></button>
      </div>
    </form>
  </div>

</nav>
<!--Nav-->
</header>
<!--Fin header-->



  <h1>Les Actualités du club</h1>
  <div class="container">
    <?php foreach ($lespublications as $publication) { ?>

      <?php setlocale(LC_ALL, 'fra_fra'); //Date en francais
      $date = strtotime($publication->getDatePublication());?>

      <div class="element" style="width:80%; margin:auto; margin-bottom:20px;">
        <a href="../../controler/actualite/detail.ctrl.php?idpublication=<?php echo $publication->getIdPublication(); ?>" title="Voir plus de détails"><h3><?php  echo $publication->getTitre(); ?></h3></a>
        <p class="datepublication"> Publié le <?php echo utf8_encode(strftime("%e %B %Y",$date)); ?> </p>
        <?php $resume = substr($publication->getDescription(),0,650); //800 caractères max pour le petit descriptif
        if (strlen($publication->getDescription()) > 650 ){
          $resume = $resume."...";
        } ?>
      <p> <?php echo $resume; ?> </p>
        <?php $titre =  $publication->getTitre();
        $str = $publication->getContent();
        if ($str != '') { //il y a au moins 1 image.
          $tab = explode('/',$str); ?>
          <p></p>
          <img class="image" src="../../model/data/images/imagesblog/<?php echo $publication->getDatePublication(); ?>/<?=$tab[0]?>" alt="">
        <?php  } ?>
      </div>
    <?php }  ?>
  </div>
<?php if ($_SERVER['PHP_SELF'] =='/M3301-site/controler/actualite/touteslesactualites.ctrl.php') { ?> <!--on affiche ces infos uniquement quand la vue est appelée par ce controleur-->

  <div class="pagination" style="justify-content:space-between; width:80%; margin:auto;">
    <a href="?action=prev&page=<?php echo $idPage; ?>"><i class="fas fa-angle-double-left fa-3x" title="page suivante"></i></a>
    <p> <strong><?=$idPage?></strong> </p>
    <a href="?action=next&page=<?php echo $idPage; ?>"><i class="fas fa-angle-double-right fa-3x" title="page précédente"></i></a>
  </div>
<?php } ?>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
