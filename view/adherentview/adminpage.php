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

        <th><p>Prénom
          <a href="<?= $chemin ?>?tri=prenomcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=prenomdecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>

        <th><p>Catégorie
          <a href="<?= $chemin ?>?tri=catecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=catedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>Date de naissance
          <a href="<?= $chemin ?>?tri=datenaissancecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=datenaissancedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>Adresse
          <a href="<?= $chemin ?>?tri=adressecroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=adressedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>
        <th><p>Télephone
        </p></th>
        <th><p>Email
        </p></th>
        <th><p>Numéro de licence
          <a href="<?= $chemin ?>?tri=numlicencecroit"><i  id="asc" onclick="ChangeIcon(this);" class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=numlicencedecroit"><i class="fas fa-sort-down"></i></a>
        </p></th>

        <p>This example demonstrates how to assign an "ondblclick" event to a p element.</p>

        <p id="demo" ondblclick="myFunction()">Double-click me.</p>

        <script>
        function myFunction() {
          document.getElementById("demo").innerHTML = "I was double-clicked!";
        }
        </script>


        <th>Actions</th>
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
            <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-shopping-basket" title="Voir les paiements."></i></a>
            <a href="../../controler/tableadherent/updateAdherent.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-user-edit" title="Modifier l'adhérent."></i></a>
            <i class="fas fa-user-times" title="Supprimer l'adhérent." style="cursor:pointer; color:red;" onClick="DelAdherent('<?=$unAdherent->getIdAdherent();?>')"></i>
          </td>
        </tr>
      <?php } ?>
      <p>Ajouter un adherent : <a href="../../view/adherentview/insertAdherent.php"> <i class="fas fa-plus-circle"></i> </a></p>
    </tbody>
  </table>
  <!-- Fin tableau -->
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Script pour valider supression d'un adhérent -->
<script>
function DelAdherent(id){
    if(confirm("Voulez vous vraiment supprimer cet adhérent ?")){
            window.location='../../controler/tableadherent/tableadherent.ctrl.php?type=delete&idAdherent='+id
    }
    else{
            alert("L'adhérent n'a pas été supprimé.")
    }
}
function ChangeIcon(element){
  var x = element.getElementById("asc");
  var v = x.getAttribute("class");
  if (v == "fas fa-sort-up"){
    v = "fas fa-sort-down";
  }else{
    v = "fas fa-sort-up";
  }
  x.setAttribute("class",v);
}
</script>
</html>
