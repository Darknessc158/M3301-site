<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'un adhérent à l'association</title>
</head>
<body>
  <h1>Ajout d'un adhérent à l'association</h1>
  <form class="" action="insertAdherent.ctrl.php" method="post">
    <p>
        Nom :<br />
       <input type="text" name="prenom" value="" />
    </p>
    <p>
        Prénom :<br />
       <input type="text" name="nom" value="" />
    </p>
    <p>
       Categorie :<br />
       <input type="text" name="categorie" value="" />
    </p>
    <p>
       Date de naissance :<br />
       <input type="text" name="datenaissance" value="" />
    </p>
    <p>
       Adresse :<br />
       <input type="text" name="adresse" value="" />
    </p>
    <p>
        Votre téléphone :<br />
       <input type="text" name="telephone" value="" />
    </p>
    <p>
        Votre email :<br />
       <input type="text" name="mail" value="" />
    </p>
    <p>
        Numero de licence (si connu) :<br />
       <input type="text" name="numlicence" value="" />
    </p>

    <p>
       <input type="submit" value="Ajouter" />
       <input type="reset" value="Annuler" />
    </p>
  </form>


</body>
</html>
