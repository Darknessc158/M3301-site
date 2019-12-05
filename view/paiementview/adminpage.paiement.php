<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->
  <link href="../../view/css/sb-admin.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body id="page-top">


  <div class="jumbotron text-center" style="margin-bottom:0">
    <img src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="">
  </div>
  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../../controler/tableadherent/tableadherent.ctrl.php"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt=""></a>

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
  <?php $chemin='../../controler/tableadherent/tableadherent.ctrl.php' ?>
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

        <th>Action</th>

      </tr>
    </thead>
    <tbody>

      <?php if ($res != 0){ foreach ($respaiement as $key => $unPaiement) { ?>
        <?php if($adherents->adherentExiste($unPaiement->getIdAdherent()) != 0 ){$adh = $adherents->getUnAdherent($unPaiement->getIdAdherent()); } ?>
        <tr>
          <td><?=$unPaiement->getIdPaiement();?></td>
          <td><?=$unPaiement->getDatePaiement();?></td>
          <td><?=$unPaiement->getPrix();?></td>
          <td><?=$unPaiement->getDescription();?></td>
          <td><?=$unPaiement->getEtatDuPaiement();?></td>
          <td><?=$unPaiement->getType();?></td>
          <td><?=$unPaiement->getIdAdherent();?> (<?php if ($adherents->adherentExiste($unPaiement->getIdAdherent()) == 0) {echo"Pas d'adherent";}else{ echo $adh->getNom(); echo ","; echo $adh->getPrenom(); }?>)</td><!--Lien vers l'adherents pour savoir qui c -->
          <td>
            <a href="../../controler/tablepaiement/updatePaiement.ctrl.php?idPaiement=<?=$unPaiement->getIdPaiement();?>&type=update"><i class="fas fa-user-edit"></i></a>
            <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php?type=delete&idPaiement=<?=$unPaiement->getIdPaiement();?>"><i class="fas fa-user-times"></i></a>
          </td>
        </tr>
      <?php }}else{
        echo "Pas de paiement pour cet adherent";
      } ?>
      <p>Ajouter un paiement : <a href="../../view/paiementview/insertPaiement.php"> <i class="fas fa-plus-circle"></i> </a></p>
    </tbody>
    </table>
    <!-- Fin tableau -->
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </html>
