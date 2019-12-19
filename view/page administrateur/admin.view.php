<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/main.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

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

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="display:flex; flex-wrap:wrap;">
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" width="60%"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../controler/accueil.ctrl.php">Accès au site</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <div class="page-header  text-center">
      <h1>Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue.</h1>
  </div>
  <div class=" text-center">
      <a href="resetmdp.ctrl.php" class="btn btn-warning">Changer votre mot de passe</a>
      <a href="logout.ctrl.php" class="btn btn-danger">Se deconnecter</a>
  </div>


  <div class="row">
    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../../model/data/images/images_sites/admin-icon.png" alt="image administrateur">
      <div class="card-body">
        <h5 class="card-title">Gestionnaire des adhérents</h5>
        <p class="card-text">Liste des adhérents, transactions d'un adhérent, modifier ou supprimer un adhérent</p>
        <a href="../../controler/tableadherent/tableadherent.ctrl.php" class="btn btn-primary">Gérer les adhérents</a>
      </div>
    </div>
    </div>

<div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../../model/data/images/images_sites/commandes-icon.png" alt="image gestion des stocks">
  <div class="card-body">
    <h5 class="card-title">Gestionnaire des stocks</h5>
    <p class="card-text">Liste des articles et des quantités, modifier ou supprimer un article</p>
    <a href="../../controler/tablearticle/tablearticle.ctrl.php" class="btn btn-primary">Gérer les stocks</a>
  </div>
  </div>
</div>

<div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../../model/data/images/images_sites/transactions-icon.png" alt="image gestion des stocks">
  <div class="card-body">
    <h5 class="card-title">Gestionnaire des transactions</h5>
    <p class="card-text">Liste des transactions, modifier ou supprimer une transaction</p>
    <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php" class="btn btn-primary">Gérer les transactions</a>
  </div>
  </div>
</div>

<div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../../model/data/images/images_sites/transactions-icon.png" alt="image gestion des stocks">
  <div class="card-body">
    <h5 class="card-title">Gestionnaire du site</h5>
    <p class="card-text">Modifier le site, Ajouter des articles pour l'actualité ...</p>
    <a href="#" class="btn btn-primary">Gérer le site</a>
  </div>
  </div>
</div>





    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
</body>
</html>
