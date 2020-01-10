<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../view/css/form.view.css">
  <title>Ajout d'un produit</title>
</head>
<body>
  <h1>Ajout d'un produit</h1>
  <form class="" action="../../controler/tablearticle/insertArticle.ctrl.php" method="post">
    <p>
        Description (Nom, référence, taille ...) :<br />
       <input type="text" name="description" value="" />
    </p>
    <p>
        Prix :<br />
       <input type="text" name="prix" value="" />
    </p>
    <p>
       Catégorie(pneu,tenue...) :<br />
       <input type="text" name="categorie" value="" />
    </p>
    <p>
       Quantité en stock :<br />
       <input type="text" name="stock" value="" />
    </p>
    <p>
       Marque :<br />
       <input type="text" name="marque" value="" />
    </p>

    <p>
       <input type="submit" value="Ajouter" />
       <input type="reset" value="Annuler" />
       </p>
       <p>

       <a id="retour" href="../../controler/tablearticle/tablearticle.ctrl.php"><button type="button" class="btn btn-primary">Retour</button></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
