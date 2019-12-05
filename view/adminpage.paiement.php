<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->
  <link href="../view/css/sb-admin.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body id="page-top">


  <div class="jumbotron text-center" style="margin-bottom:0">
    <img src="../model/data/images/images_sites/accueil_banniere.jpg" alt="">
  </div>
  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../controler/tableadherent.ctrl.php"> <img src="../model/data/images/images_sites/logo-scale.jpg" alt=""></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
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
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->


  <!-- Tableau !-->
  <?php $chemin='../controler/tableadherent.ctrl.php' ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->

        <th>idPaiement</th><!--  nomcolonne de la bd -->

        <th>datePaiement</th>

        <th>prix</th>

        <th>description</th>

        <th>etatDuPaiement</th>

        <th>type</th>

        <th>idAdherent</th>

      </tr>
    </thead>
    <tbody>
      <?php while ($respaiement as $key => $unPaiement){ ?>
        <tr>
          <td><?=$unPaiement->getIdPaiement();?></td>
          <td><?=$unPaiement->getDatePaiement();?></td>
          <td><?=$unPaiement->getPrix();?></td>
          <td><?=$unPaiement->getDescription();?></td>
          <td><?=$unPaiement->getEtatDuPaiement();?></td>
          <td><?=$unPaiement->getType();?></td>
          <td><?=$unPaiement->getIdAdherent();?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    <!-- Fin tableau -->
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </html>
