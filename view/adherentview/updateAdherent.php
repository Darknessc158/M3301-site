<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Modification d'un adhérent</title>
</head>
<body>
  <h1>Modification d'un adhérent</h1>
  <form class="" action="../../controler/tableadherent/updateAdherentValide.ctrl.php?idAdherent=<?=$_GET['idAdherent']?>" method="post">
    <p>
        Nom :<br />
       <input type="text" name="prenom" value="<?php echo $nom ?>" />
    </p>
    <p>
        Prénom :<br />
       <input type="text" name="nom" value="<?php echo $prenom ?>" />
    </p>
    <p>
       Categorie :<br />
       <input type="text" name="categorie" value="<?php echo $categorie ?>" />
    </p>
    <p>
       Date de naissance :<br />
       <input type="date" name="datenaissance" value="<?php echo $datenaissance ?>" />
    </p>
    <p>
       Adresse :<br />
       <input type="text" name="adresse" value="<?php echo $adresse ?>" />
    </p>
    <p>
        Votre téléphone :<br />
       <input type="text" name="telephone" value="<?php echo $telephone ?>" />
    </p>
    <p>
        Votre email :<br />
       <input type="text" name="mail" value="<?php echo $mail ?>" />
    </p>
    <p>
        Numero de licence (si connu) :<br />
       <input type="text" name="numlicence" value="<?php echo $numlicence ?>" />
    </p>

    <p>
       <input type="submit" value="Modifier" />
       <input type="reset" value="Annuler" />
       <a href="../../controler/tableadherent/tableadherent.ctrl.php"> Retour : <i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
