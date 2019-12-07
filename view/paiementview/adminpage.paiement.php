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
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablepaiement/tableUnPaiement.ctrl.php">Tous les paiements</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <h2>Table des paiements</h2>
  <!-- Tableau !-->
  <?php $chemin='../../controler/tableadherent/tableadherent.ctrl.php' ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->

        <th>Date du paiement</th>

        <th>Prix</th>

        <th>Description</th>

        <th>Etat du paiement</th>

        <th>Licence, Adhésion, Article</th>

        <th>Adhérent</th>

        <th>Action</th>

      </tr>
    </thead>
    <tbody>

      <?php foreach ($respaiement as $unPaiement) { ?>
        <tr>
          <td><?=$unPaiement->getDatePaiement();?></td>
          <td><?=$unPaiement->getPrix();?></td>
          <td><?=$unPaiement->getDescription();?></td>
          <td><?=$unPaiement->getEtatDuPaiement();?></td>
          <td><?=$unPaiement->getType();?></td>
          <td><?php if ($adherents->getUnAdherent($unPaiement->getIdAdherent()) != null) {$adh = ($adherents->getUnAdherent($unPaiement->getIdAdherent()));
          echo $adh->getPrenom()." ".$adh->getNom();}
          else{echo "Pas d'adhérent pour ce paiement";}?>
          <td>
            <a href="../../controler/tablepaiement/updatePaiement.ctrl.php?idPaiement=<?=$unPaiement->getIdPaiement();?>&type=update"><i class="fas fa-user-edit"></i></a>
            <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php?type=delete&idPaiement=<?=$unPaiement->getIdPaiement();?>"><i class="fas fa-user-times"></i></a>
          </td>
        </tr>
      <?php } ?>
      <p>Ajouter un paiement : <a href="../../controler/tablepaiement/insertpaiementavant.ctrl.php<?php if (isset($_GET['idAdherent'])){echo "?idAdherent=".$_GET['idAdherent'];}?>"> <i class="fas fa-cart-plus"></i> </a></p>
    </tbody>
    </table>
    <!-- Fin tableau -->
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </html>
