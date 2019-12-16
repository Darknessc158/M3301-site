<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->
  <link href="admin.view.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body id="page-top" style="text-align:center; background-color:silver;">


  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" style="border-radius: 20px;"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../view/autres/main.view.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actualites.view.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lebureau.view.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="histoireclub.view.php">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../autres/contact.view.php">Nous contacter</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->
  <div class="cards">

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="admin-icon.png" alt="image administrateur">
    <div class="card-body">
      <h5 class="card-title">Gestionnaire des adhérents</h5>
      <p class="card-text">Liste des adhérents, transactions d'un adhérent, modifier ou supprimer un adhérent</p>
      <a href="../../controler/tableadherent/tableadherent.ctrl.php" class="btn btn-primary">Gérer les adhérents</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="commandes-icon.png" alt="image gestion des stocks">
  <div class="card-body">
    <h5 class="card-title">Gestionnaire des stocks</h5>
    <p class="card-text">Liste des articles et des quantités, modifier ou supprimer un article</p>
    <a href="../../controler/tablearticle/tablearticle.ctrl.php" class="btn btn-primary">Gérer les stocks</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="transactions-icon.png" alt="image gestion des stocks">
  <div class="card-body">
    <h5 class="card-title">Gestionnaire des transactions</h5>
    <p class="card-text">Liste des transactions, modifier ou supprimer une transaction</p>
    <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php" class="btn btn-primary">Gérer les transactions</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="transactions-icon.png" alt="image gestion des stocks">
  <div class="card-body">
    <h5 class="card-title">Gestionnaire du site</h5>
    <p class="card-text">Modifier les site, Ajouter des coureurs ou des articles pour l'actualité ...</p>
    <a href="../../view/adherentview/insertAdherentSite.php" class="btn btn-primary">Gérer le site</a>
  </div>
  </div>

  </div>




</script>
</html>
