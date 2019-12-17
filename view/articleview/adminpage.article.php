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

  <h2>Gestion des Articles</h2>
  <!-- Tableau !-->
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->

        <th>Catégorie</th>

        <th>Produit et taille</th>

        <th>Quantité en stock</th>

        <th>Prix</th>

        <th>Marque</th>

        <th>Actions</th>

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
            <a href="../../controler/tablearticle/updateArticleAvant.ctrl.php?idArticle=<?=$unArticle->getIdArticle();?>"><i class="fas fa-user-edit" title="Modifier l'article."></i></a>
            <i class="fas fa-user-times" title="Supprimer l'article." style="cursor:pointer; color:red;" onClick="DelArticle('<?=$unArticle->getIdArticle();?>')"></i>
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
    else{
            alert("L'article n'a pas été supprimé.")
    }
}
</script>
</html>
