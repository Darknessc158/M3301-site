
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/admin.view.css" rel="stylesheet">
  <link href="../../view/css/main.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

  <div class="boximg">
    <p class="box">
      <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
    </p>
  </div>

  <!--Nav-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" width="60%"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../controler/accueil.ctrl.php">Accéder au site</a>
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
    <a href="logout.ctrl.php" class="btn btn-danger">Se déconnecter</a>
  </div>


  <div class="row" style="width:100%; margin: auto; display:flex; flex-wrap:wrap; text-align:center;">
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
          <p class="card-text">Liste des produits et des quantités, modifier ou supprimer un produit</p>
          <a href="../../controler/tablearticle/tablearticle.ctrl.php" class="btn btn-primary">Gérer les stocks</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../../model/data/images/images_sites/transactions-icon.png" alt="image gestion des transaction">
        <div class="card-body">
          <h5 class="card-title">Gestionnaire des transactions</h5>
          <p class="card-text">Liste des transactions, modifier ou supprimer une transaction</p>
          <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php" class="btn btn-primary">Gérer les transactions</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../../model/data/images/images_sites/site-icon.png" alt="image gestion actualites">
        <div class="card-body">
          <h5 class="card-title">Gestionnaire des actualités</h5>
          <p class="card-text">Ajouter des articles pour l'actualité</p>
          <a href="../../view/actualite/ajouterarticles.view.php" class="btn btn-primary">Ajouter un Article</a>
          <a href="../../controler/actualite/tablepublication.ctrl.php" class="btn btn-primary">Modifier/Supprimer un Article</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../../model/data/images/images_sites/stats-icon.jpg" alt="image Statistique">
        <div class="card-body">
          <h5 class="card-title">Statistique du site</h5>
          <p class="card-text">Informations sur les visiteurs du site ...</p>
          <a href="#" class="btn btn-primary">(En cours de développement)</a>
        </div>
      </div>
    </div>

  <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../../model/data/images/images_sites/pdf-icon.png" alt="image Remplir PDF">
      <div class="card-body">
        <h5 class="card-title">Remplir PDF</h5>
        <p class="card-text">Remplir ses PDF en ligne</p>

        <a href="../../view/viewformulaire/main.view.formulaire.php" class="btn btn-primary">Remplir</a>

      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../../model/data/images/images_sites/messagerie-icon.svg" alt="image Remplir PDF">
      <div class="card-body">
        <h5 class="card-title">Accès Messagerie</h5>
        <p class="card-text">Accéder à la messagerie</p>

        <a href="http://scale-echirolles.ddns.net/rainloop" target="_blank"class="btn btn-primary">Messagerie</a>

      </div>
    </div>
  </div>


</div>
</div>
  <!--Debut alerte stock article-->
    <div class="" style="border:1px solid gray; width: 36rem; background-color: #fff; border-radius: .25rem; margin:auto; margin-bottom:30px; padding:5px; margin-top:30px;">
      <h4>Informations sur le stock des articles</h4>

<div class="Infos Article" style="border-top:1px solid gray;">
      <h6>Articles en rupture de stock :</h6>
      <?php foreach ($lesarticles as $article) {
        if ($article->getQuantite() == 0){
          $nom = $article->getDescription();
        //echo "<script>window.alert('Attention rupture de stock, article concerné : $nom')</script>"; Alerte plus de stock non necessaire
          echo '<p>- <strong style="color:red">'.$nom.'</strong></p>';
        }
      } ?>
</div>

<div class="Infos Article" style="border-top:1px solid gray;">
      <h6>Articles avec peu de stock :</h6>
<!--Debut reflexion alerte stock article-->
  <?php foreach ($lesarticles as $article) { ?>

      <?php if ($article->getQuantite() > 0 && $article->getQuantite() <= 2){ ?>
        <div style="border:0.5px solid black; border-radius:10px; margin:15px;">
<?php   $nom = $article->getDescription();
        $stock = $article->getQuantite();
        echo '<p><strong style="color:red">'.$nom.'</strong></p>';
        echo '<p><strong style="color:red">Stock restant : '.$stock.'</strong></p>';
        echo "</div>";
      } ?>
  <?php  } ?>
</div>

  <a href="../../controler/tablearticle/tablearticle.ctrl.php" class="btn btn-primary">Remplir les stocks</a>
</div>

<script>
function Article(id){
  if(confirm("Voulez vous vraiment supprimer cet adhérent ?")){
    window.location='../../controler/tableadherent/tableadherent.ctrl.php?type=delete&idAdherent='+id
  }
}
</script>



  <!--Fin alerte stock article-->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
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
