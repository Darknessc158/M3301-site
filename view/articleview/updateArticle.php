<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../view/css/form.view.css">
  <title>Modification d'un Article</title>
</head>
<body>
  <h1>Modification d'un article</h1>
  <form class="" action="../../controler/tablearticle/updateArticle.ctrl.php?idArticle=<?php echo $_GET['idArticle']; ?>" method="post">
    <p>
        Description (Nom, référence, taille ...) :<br />
       <input type="text" name="description" value="<?php echo $description; ?>" />
    </p>
    <p>
        Prix :<br />
       <input type="text" name="prix" value="<?php echo $prix; ?>" />
    </p>
    <p>
       Catégorie(pneu,tenue...) :<br />
       <input type="text" name="categorie" value="<?php echo $categorie; ?>" />
    </p>
    <p>
       Quantité en stock :<br />
       <input type="text" name="stock" value="<?php echo $stock; ?>" />
    </p>
    <p>
       Marque :<br />
       <input type="text" name="marque" value="<?php echo $marque; ?>" />
    </p>

    <p>
       <input type="submit" value="Modifier" />
       <input type="reset" value="Annuler" />
       </p>
       <p>
       Retour : <a href="../../controler/tablearticle/tablearticle.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
