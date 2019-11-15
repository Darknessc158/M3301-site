<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Scale Echirolles</title>
</head>
<style media="screen">
  footer{
    position: fixed;
    bottom: 0px ;
    width : 100%;

  }
</style>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Scale Echirolles</a>
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarCasque" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accueil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarCasque">
          <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=ecouteursf&element=type">Ecouteurs sans fil</a>
          <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=casque&element=type">Circum-auriculaires</a>
          <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=casque&element=type">Anti-Bruit</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarEnceintes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Enceintes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarEnceintes">
          <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=partybox&element=type">PartyBox</a>
          <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=barredeson&element=type">Barres de son</a>
          <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=enceinteportable&element=type">Enceintes Portables</a>
      </li>

      <li class="nav-item"><a class="nav-link" href="../controler/produit.ctrl.php">Tous les Produits</a></li>

      <li class="nav-item"><a class="nav-link" href="assistance.view.php">Assistance</a></li>

      <li class="nav-item"> <a style="color:#FF4500;" class="nav-link" href="../view/admin.view.php">Administrateur</a></li>

    </ul>
  </nav>
  <section id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img_sites/illustration/HP_banner_JBL-Pulse-4-Stairs_desktop2.png" alt="First slide">
      <div class="carousel-caption">
                        <h1>JBL Pulse 4</h1>
                        <p>Illustrez votre musique à travers un jeu de lumière</p>
                        <button type="button" class="btn btn-lg btn-light" onclick=window.location.href='../controler/description.ctrl.php?id=1'>Détails</button>

                    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_sites/illustration/SC02886_JBL_Flip5_Web_Banners_2880x1080.jpg" alt="Second slide">
      <div class="carousel-caption">
                        <h1>JBL Xtreme 2</h1>
                        <p>Partagez votre musique avec toute votre équipe</p>
                        <button type="button" class="btn btn-lg btn-light" onclick=window.location.href='../controler/description.ctrl.php?id=5'>Détails</button>
                    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_sites/illustration/SC02673_JBL_Partybox_Banner_2880x1080px.jpg" alt="Third slide">
      <div class="carousel-caption">
                        <h1>JBL PartyBox 300 </h1>
                        <p>Explosez vos tympans ainsi que ceux de vos voisins</p>
                        <button type="button" class="btn btn-lg btn-light" onclick=window.location.href='../controler/description.ctrl.php?id=15'>Détails</button>

                    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">

  </section>



  <footer>
    <nav nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Nous Contacter</a></li>
        <li class="nav-item"><a class="nav-link" href="#">F.A.Q</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Mention légales</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Conditions d'utilisation</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Qui sommes nous?</a></li>
      </ul>
    </nav>
  </footer>


</body>
</html>
