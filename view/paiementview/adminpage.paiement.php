<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->
  <link href="../../view/css/admintable.view.css" rel="stylesheet">
  <link href="../../view/css/main.view.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <div class="boximg">
    <p class="box">
    <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
    </p>
  </div>

  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt=""></a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tableadherent/tableadherent.ctrl.php">Gestionnaire des adhérents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablearticle/tablearticle.ctrl.php">Gestionnaire des stocks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/auth/profilAdmin.ctrl.php">Accueil administrateur</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <h2>Gestion des transactions <?php if (isset($_GET['idAdherent'])){ echo 'concernant '; echo ($adherents->getUnAdherent($_GET['idAdherent']))->getPrenom().' '.($adherents->getUnAdherent($_GET['idAdherent']))->getNom();} ?> </h2>

<?php if ($respaiement == null){ if (isset($_GET['idAdherent'])) {echo 'Pas de paiement enregistré pour cet adhérent';}else{echo "Pas de paiement enregistré";}}else{ ?>

  <!-- Tableau !-->
  <?php $chemin='../../controler/tablepaiement/tableUnPaiement.ctrl.php?';
    if (isset($_GET['idAdherent'])){
      $id = $_GET['idAdherent'];
      $chemin='../../controler/tablepaiement/tableUnPaiement.ctrl.php?idAdherent='.$id.'&';
    }

   ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->

        <th>
          <div class="boite_titre">
          <p>Catégorie</p>
          <div class="icones_tri">
          <a href="<?= $chemin ?>tri=catecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>tri=catedecroit"><i class="fas fa-sort-down"></i></a>
        </div>
        </div>
        </th>

        <th>
          <div class="boite_titre">
          <p>Date du paiement </p>
          <div class="icones_tri">
          <a href="<?= $chemin ?>tri=datepaiementcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>tri=datepaiementdecroit"><i class="fas fa-sort-down"></i></a>
        </div>
        </div>
        </th>

        <th>
          <div class="boite_titre">
          <p>Prix</p>
          <div class="icones_tri">
          <a href="<?= $chemin ?>tri=prixcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>tri=prixdecroit"><i class="fas fa-sort-down"></i></a>
        </div>
        </div>
        </th>

        <th>
          <p>Adhérent</p>
          </th>

        <th>
          <div class="boite_titre">
          <p>Etat du paiement</p>
          <div class="icones_tri">
          <a href="<?= $chemin ?>?tri=etatcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=etatdecroit"><i class="fas fa-sort-down"></i></a>
        </div>
        </div>
        </th>

        <th>
          <p>Description(quantité)</p>
        </th>

        <th>
          <p>Actions</p>
        </th>

      </tr>
    </thead>
    <tbody>

      <?php foreach ($respaiement as $key => $unPaiement) { ?>
        <tr>
          <td><?=$unPaiement->getType();?></td>
          <td><?=$unPaiement->getDatePaiement();?></td>
          <td><?=$unPaiement->getPrix();?></td>
          <td>
          <?php echo ($paiements->getNomPrenomAdh($unPaiement->getIdAdherent()))[1]." ".($paiements->getNomPrenomAdh($unPaiement->getIdAdherent()))[0]; ?>
          </td>
          <td><?=$unPaiement->getEtatDuPaiement();?></td>
          <td><?=$unPaiement->getDescription();?></td>
          <td>
            <a href="../../controler/tablepaiement/updatePaiement.ctrl.php?idPaiement=<?=$unPaiement->getIdPaiement();?>&type=update&idAdherent=<?=$unPaiement->getIdAdherent();?>"><i class="far fa-edit" title="Modifier"></i></a>
            <i class="far fa-trash-alt" title="Supprimer" style="cursor:pointer; color:red;" onClick="DelPaiement('<?=$unPaiement->getIdPaiement();?>','<?=$unPaiement->getIdAdherent();?>')"></i>
          </td>
        </tr>
      <?php }} ?>
      <p>Ajouter un paiement : <a href="../../controler/tablepaiement/insertpaiementavant.ctrl.php<?php if (isset($_GET['idAdherent'])){echo "?idAdherent=".$_GET['idAdherent'];}?>"> <i class="fas fa-cart-plus"></i> </a></p>
    </tbody>
    </table>
    <!-- Fin tableau -->
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>function DelPaiement(idpa,idad){
      if(confirm("Voulez vous vraiment supprimer ce paiement ?")){
        <?php  if (isset($_GET['idAdherent'])){ ?>
              window.location='../../controler/tablepaiement/tableUnPaiement.ctrl.php?type=delete&idPaiement='+idpa+'&idAdherent='+idad
        <?php }else{ ?>
              window.location='../../controler/tablepaiement/tableUnPaiement.ctrl.php?type=delete&idPaiement='+idpa
          <?php } ?>
      }
  }
  </script>
  </html>
