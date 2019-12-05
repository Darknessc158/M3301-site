<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'un paiement</title>
</head>
<body>
  <h1>Ajout d'un paiement</h1>
  <form class="" action="../../controler/tablepaiement/insertPaiement.ctrl.php" method="post">
    <p>
        Date du paiement (jj/mm/aaaa) :<br />
       <input type="text" name="datePaiement" value="" />
    </p>
    <p>
        Prix :<br />
       <input type="text" name="prix" value="" />
    </p>
    <p>
       Description :<br />
       <input type="text" name="description" value="" />
    </p>
    <p>
       Etat du paiement :<br />
       <input type="text" name="etatDuPaiement" value="" />
    </p>
    <p>
       Type (Licence,adhésion,Article) :<br />
       <SELECT name="type" size="1">
        <OPTION>Licence
        <OPTION>Adhésion
        <OPTION>Article
      </SELECT>
    </p>
    <p>
        Identifiant de l'adhérent :<br />
       <input type="text" name="idAdherent" value="<?=$_GET['idAdherent']?>" />
    </p>
    <p>
       <input type="submit" value="Ajouter" />
       <input type="reset" value="Annuler" />
       Retour : <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
