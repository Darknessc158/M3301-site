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
<body>

  <div class="boximg" style="margin-bottom:0">
    <p class="box">
      <img class="scroll" src="../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
    </p>
  </div>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"> <img src="../model/data/images/images_sites/logo-scale.jpg" alt="logo scale Echirolles" width="60%"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../controler/accueil.ctrl.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controler/lebureau.ctrl.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controler/lescoureurs.ctrl.php">Les coureurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/autres/contact.view.php">Nous contacter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controler/auth/profilAdmin.ctrl.php">Page administrateur</a>
        </li>
      </ul>
    </div>
  </nav>

  <h1>Les bureau du SCALE et l'encadrement</h1>
  <div class="container">
    <?php foreach ($lesadh as $membre) {
      echo '<div style="border:1px dotted gray; border-radius:60px; margin:auto; margin-bottom:20px;">';
      echo '<div class="element" style="background-image:url(../model/data/images/lebureau/'.$membre->getUrlPhotoAlt().'); background-size:cover; width:200px; height:300px;">';
      echo "</div>";
      $descriptionrole = explode('/',$membre->getRole())[1];
      echo '<p>'.$descriptionrole.'</p>';
      echo '<p>'.$membre->getPrenom().' '.$membre->getNom().'</p>';
      echo '<p>Tél. : '.$membre->getTelephone().'</p>';
      echo '<p><a href="mailto:'.$membre->getMail().'">'.$membre->getMail().'</a></p>';
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
