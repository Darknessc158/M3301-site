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

<body id="page-top" style="text-align:center;">


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
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablearticle/tablearticle.ctrl.php">Tous les articles</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <h2>Gestion des adhérents</h2>
  <!-- Tableau !-->
  <?php $chemin='../../controler/tableadherent/tableadherent.ctrl.php' ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->
        <th><p>Nom
          <a href="<?= $chemin ?>?tri=nomcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=nomdecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>

        <th><p>Prenom
          <a href="<?= $chemin ?>?tri=prenomcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=prenomdecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>

        <th><p>categorie
          <a href="<?= $chemin ?>?tri=catecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=catedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>datenaissance
          <a href="<?= $chemin ?>?tri=datenaissancecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=datenaissancedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>adresse
        <a href="<?= $chemin ?>?tri=adressecroit"><i class="fas fa-sort-up"></i></a>
        <a href="<?= $chemin ?>?tri=adressedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>telephone
        </p></th>
        <th><p>mail
        </p></th>
        <th><p>numlicence
        <a href="<?= $chemin ?>?tri=numlicencecroit"><i class="fas fa-sort-up"></i></a>
        <a href="<?= $chemin ?>?tri=numlicencedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($resadh as $unAdherent){ ?>
        <tr>
          <td><?=$unAdherent->getNom();?></td>
          <td><?=$unAdherent->getPrenom();?></td>
          <td><?=$unAdherent->getCategorie();?></td>
          <td><?=$unAdherent->getDateNaissance();?></td>
          <td><?=$unAdherent->getAdresse();?></td>
          <td><?=$unAdherent->getTelephone();?></td>
          <td><?=$unAdherent->getMail();?></td>
          <td><?=$unAdherent->getNumLicence();?></td>
          <td>



<div class="tooltip">Voir les paiements<span class="tooltiptext">Voir les paiements</span></div>
            <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-shopping-basket"></i></a>
            <a href="../../controler/tableadherent/updateAdherent.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-user-edit"></i></a>
            <a href="<?= $chemin ?>?type=delete&idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-user-times"></i></a>
           </td>
        </tr>
        <?php } ?>
        <p>Ajouter un adherent : <a href="../../view/adherentview/insertAdherent.php"> <i class="fas fa-plus-circle"></i> </a></p>
      </tbody>
    </table>
    <!-- Fin tableau -->
    <p>Move the mouse over the text below:</p>

    <div class="tooltip">Hover over me
      <span class="tooltiptext">Tooltip text</span>
    </div>

    <p>Note that the position of the tooltip text isn't very good. Go back to the tutorial and continue reading on how to position the </p>
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </html>


<html>
<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -60px;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: black transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
<body style="text-align:center;">

<h2>Top Tooltip w/ Bottom Arrow</h2>

<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>

</body>
</html>
