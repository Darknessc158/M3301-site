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
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" width="60%"></a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tableadherent/tableadherent.ctrl.php">Gestionnaire des adhérents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablearticle/tablearticle.ctrl.php">Gestionnaire des stocks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablepaiement/tableUnPaiement.ctrl.php">Gestionnaire des transactions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/auth/profilAdmin.ctrl.php">Accueil administrateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablearticle/tablearticle.ctrl.php"><i class="fas fa-sync" title="Rafraîchir"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <h2>Gestion des stocks</h2>
  <!-- Tableau !-->
  <?php $chemin='../../controler/tablearticle/tablearticle.ctrl.php' ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->


        <th>
          <div class="boite_titre">
            <p>Catégorie</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=catecroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=catedecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
        </th>

        <th>
          <div class="boite_titre">
            <p>Produit et taille</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=produitcroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=produitdecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
        </th>
      </div>

      <th>
        <div class="boite_titre">
          <p>Quantité en stock</p>
          <div class="icones_tri">
            <a href="<?= $chemin ?>?tri=quantitecroit"><i class="fas fa-sort-up"></i></a>
            <a href="<?= $chemin ?>?tri=quantitedecroit"><i class="fas fa-sort-down"></i></a>
          </div>
        </div>
      </th>
    </div>

    <th>
      <div class="boite_titre">
        <p>Prix</p>
        <div class="icones_tri">
          <a href="<?= $chemin ?>?tri=prixcroit"><i class="fas fa-sort-up"></i></a>
          <a href="<?= $chemin ?>?tri=prixdecroit"><i class="fas fa-sort-down"></i></a>
        </div>
      </div>
    </th>
  </div>

  <th>
    <div class="boite_titre">
      <p>Marque</p>
      <div class="icones_tri">
        <a href="<?= $chemin ?>?tri=marquecroit"><i class="fas fa-sort-up"></i></a>
        <a href="<?= $chemin ?>?tri=marquedecroit"><i class="fas fa-sort-down"></i></a>
      </div>
    </div>
  </th>


        <th>
          <p>Actions</p>
        </th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($lesArticles as  $unArticle){ ?>
        <tr>
          <td><?=$unArticle->getCategorie();?></td>
          <td><?=$unArticle->getDescription();?></td>
          <td><?=$unArticle->getQuantite();?></td>
          <td><?=$unArticle->getPrix();?></td>
          <td><?=$unArticle->getMarque();?></td>
          <td>
            <a href="../../controler/tablearticle/updateArticleAvant.ctrl.php?idArticle=<?=$unArticle->getIdArticle();?>"><i class="far fa-edit" title="Modifier l'article."></i></a>
            <i class="far fa-trash-alt" title="Supprimer l'article." style="cursor:pointer; color:red;" onClick="DelArticle('<?=$unArticle->getIdArticle();?>')"></i>
          </td>
        </tr>
      <?php } ?>
      <p>Ajouter un article : <a href="../../view/articleview/insertArticle.php"> <i class="fas fa-plus-circle"></i> </a></p>
    </tbody>
  </table>
    <!-- Fin tableau -->
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Script pour valider supression d'un adhérent -->
<script>function DelArticle(id){
    if(confirm("Voulez vous vraiment supprimer cet article ?")){
            window.location='../../controler/tablearticle/tablearticle.ctrl.php?type=delete&idArticle='+id
    }
}
</script>
</html>
