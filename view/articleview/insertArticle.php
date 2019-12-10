<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'un Article</title>
</head>
<body>
  <h1>Ajout d'un article</h1>
  <form class="" action="../../controler/tablearticle/insertArticle.ctrl.php" method="post">
    <p>
        Nom/Référence et Taille :<br />
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
       Retour : <a href="../../controler/tablearticle/tablearticle.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
