<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Modification d'un Paiement</title>
</head>
<body>
  <h1>Modification d'un Paiement</h1>
  <form class="" action="../../controler/tablepaiement/updatePaiementValide.ctrl.php?idPaiement=<?=$_GET['idPaiement']?>" method="post">
    <p>
        Date du paiement (jj/mm/aaaa) :<br />
       <input type="text" name="datePaiement" value="<?php echo $datePaiement ?>" />
    </p>
    <p>
        Prix :<br />
       <input type="text" name="prix" value="<?php echo $prix ?>" />
    </p>
    <p>
       Description :<br />
       <input type="text" name="description" value="<?php echo $description ?>" />
    </p>
    <p>
       Etat du paiement :<br />
       <input type="text" name="etatDuPaiement" value="<?php echo $etatDuPaiement ?>" />
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
        Identifiant de l'adhérent <br />
       <input type="text" name="idAdherent" value="<?php echo $idAdherent ?>" />
    </p>

    <p>
       <input type="submit" value="Modifier" />
       <input type="reset" value="Annuler" />
       <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php"> Retour : <i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
